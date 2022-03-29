<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class MultipleModulesExportProblem extends ModProblem
{
    protected string $secondModName;

    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-incompatible-problem", [
            "first-mod-name" => $this->getModName(),
            "second-mod-name" => $this->secondModName
        ]);
    }

    public static function getPatterns(): array
    {
        return [
            "/Exception in thread \"main\" java\.lang\.module\.ResolutionException: Modules ([^ ]+) and ([^ ]+) export package/",
            "/Exception in thread \"main\" java\.lang\.module\.ResolutionException: Module ([^ ]+) contains package [^ ]+, module ([^ ]+) exports package/"
        ];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->modName = $matches[1];
        $this->addSolution((new ModRemoveSolution())->setModName($this->modName));

        $this->secondModName = $matches[2];
        $this->addSolution((new ModRemoveSolution())->setModName($this->secondModName));
    }
}