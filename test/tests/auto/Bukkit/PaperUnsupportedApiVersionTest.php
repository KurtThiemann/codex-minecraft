<?php

class PaperUnsupportedApiVersionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-unsupported-api-version.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PaperLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:43] [ServerMain/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:43] [ServerMain/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:45] [Worker-Main-1/INFO]: Loaded 7 recipes
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:45] [Worker-Main-1/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Starting minecraft server version 1.18.2
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Loading properties
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: This server is running Paper version git-Paper-333 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT) (Git: 9fd870d)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Starting Minecraft server on *:23728
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Paper: Using libdeflate (Linux x86_64) compression from Velocity.
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Paper: Using OpenSSL 1.1.x (Linux x86_64) cipher from Velocity.
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/ERROR]: Could not load \'plugins/AuctionHouse-1.19-3.3.1.jar\' in folder \'plugins\'
                                    [number:protected] => 14
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.InvalidPluginException: Unsupported API version 1.19
                                    [number:protected] => 15
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_18_R2.util.CraftMagicNumbers.checkSupported(CraftMagicNumbers.java:375) ~[paper-1.18.2.jar:git-Paper-387]
                                    [number:protected] => 16
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.loadPlugin(JavaPluginLoader.java:149) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                    [number:protected] => 17
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugin(SimplePluginManager.java:415) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                    [number:protected] => 18
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:323) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                    [number:protected] => 19
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_18_R2.CraftServer.loadPlugins(CraftServer.java:418) ~[paper-1.18.2.jar:git-Paper-387]
                                    [number:protected] => 20
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.initServer(DedicatedServer.java:288) ~[paper-1.18.2.jar:git-Paper-387]
                                    [number:protected] => 21
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.runServer(MinecraftServer.java:1164) ~[paper-1.18.2.jar:git-Paper-387]
                                    [number:protected] => 22
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.lambda$spin$0(MinecraftServer.java:316) ~[paper-1.18.2.jar:git-Paper-387]
                                    [number:protected] => 23
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:833) ~[?:?]
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/ERROR]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:46] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:46] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:52] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:52] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Time elapsed: 243 ms
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Preparing start region for dimension minecraft:the_nether
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Time elapsed: 153 ms
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Preparing start region for dimension minecraft:the_end
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Time elapsed: 193 ms
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Thread Query Listener started
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Query Listener #1/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: JMX monitoring enabled
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Running delayed init tasks
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Done (7.061s)! For help, type "help"
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:22:53] [Server thread/INFO]: Timings Reset
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:22:53] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 29
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14:22:43] [ServerMain/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[14:22:45] [Worker-Main-1/INFO]: Loaded 7 recipes
[14:22:46] [Server thread/INFO]: Starting minecraft server version 1.18.2
[14:22:46] [Server thread/INFO]: Loading properties
[14:22:46] [Server thread/INFO]: This server is running Paper version git-Paper-333 (MC: 1.18.2) (Implementing API version 1.18.2-R0.1-SNAPSHOT) (Git: 9fd870d)
[14:22:46] [Server thread/INFO]: Server Ping Player Sample Count: 12
[14:22:46] [Server thread/INFO]: Using 4 threads for Netty based IO
[14:22:46] [Server thread/INFO]: Default game type: SURVIVAL
[14:22:46] [Server thread/INFO]: Generating keypair
[14:22:46] [Server thread/INFO]: Starting Minecraft server on *:23728
[14:22:46] [Server thread/INFO]: Using epoll channel type
[14:22:46] [Server thread/INFO]: Paper: Using libdeflate (Linux x86_64) compression from Velocity.
[14:22:46] [Server thread/INFO]: Paper: Using OpenSSL 1.1.x (Linux x86_64) cipher from Velocity.
[14:22:46] [Server thread/ERROR]: Could not load \'plugins/AuctionHouse-1.19-3.3.1.jar\' in folder \'plugins\'
org.bukkit.plugin.InvalidPluginException: Unsupported API version 1.19
	at org.bukkit.craftbukkit.v1_18_R2.util.CraftMagicNumbers.checkSupported(CraftMagicNumbers.java:375) ~[paper-1.18.2.jar:git-Paper-387]
	at org.bukkit.plugin.java.JavaPluginLoader.loadPlugin(JavaPluginLoader.java:149) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
	at org.bukkit.plugin.SimplePluginManager.loadPlugin(SimplePluginManager.java:415) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:323) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
	at org.bukkit.craftbukkit.v1_18_R2.CraftServer.loadPlugins(CraftServer.java:418) ~[paper-1.18.2.jar:git-Paper-387]
	at net.minecraft.server.dedicated.DedicatedServer.initServer(DedicatedServer.java:288) ~[paper-1.18.2.jar:git-Paper-387]
	at net.minecraft.server.MinecraftServer.runServer(MinecraftServer.java:1164) ~[paper-1.18.2.jar:git-Paper-387]
	at net.minecraft.server.MinecraftServer.lambda$spin$0(MinecraftServer.java:316) ~[paper-1.18.2.jar:git-Paper-387]
	at java.lang.Thread.run(Thread.java:833) ~[?:?]
[14:22:46] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[14:22:46] [Server thread/INFO]: Preparing level "world"
[14:22:52] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[14:22:53] [Server thread/INFO]: Time elapsed: 243 ms
[14:22:53] [Server thread/INFO]: Preparing start region for dimension minecraft:the_nether
[14:22:53] [Server thread/INFO]: Time elapsed: 153 ms
[14:22:53] [Server thread/INFO]: Preparing start region for dimension minecraft:the_end
[14:22:53] [Server thread/INFO]: Time elapsed: 193 ms
[14:22:53] [Server thread/INFO]: Starting GS4 status listener
[14:22:53] [Server thread/INFO]: Thread Query Listener started
[14:22:53] [Query Listener #1/INFO]: Query running on 0.0.0.0:9898
[14:22:53] [Server thread/INFO]: JMX monitoring enabled
[14:22:53] [Server thread/INFO]: Running delayed init tasks
[14:22:53] [Server thread/INFO]: Done (7.061s)! For help, type "help"
[14:22:53] [Server thread/INFO]: Timings Reset
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:22:46] [Server thread/INFO]: Starting minecraft server version 1.18.2
                                            [number:protected] => 3
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:22:46] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\UnsupportedApiVersionProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:22:46] [Server thread/ERROR]: Could not load \'plugins/AuctionHouse-1.19-3.3.1.jar\' in folder \'plugins\'
                                            [number:protected] => 14
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.InvalidPluginException: Unsupported API version 1.19
                                            [number:protected] => 15
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_18_R2.util.CraftMagicNumbers.checkSupported(CraftMagicNumbers.java:375) ~[paper-1.18.2.jar:git-Paper-387]
                                            [number:protected] => 16
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.loadPlugin(JavaPluginLoader.java:149) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                            [number:protected] => 17
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugin(SimplePluginManager.java:415) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                            [number:protected] => 18
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.loadPlugins(SimplePluginManager.java:323) ~[paper-api-1.18.2-R0.1-SNAPSHOT.jar:?]
                                            [number:protected] => 19
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_18_R2.CraftServer.loadPlugins(CraftServer.java:418) ~[paper-1.18.2.jar:git-Paper-387]
                                            [number:protected] => 20
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.initServer(DedicatedServer.java:288) ~[paper-1.18.2.jar:git-Paper-387]
                                            [number:protected] => 21
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.runServer(MinecraftServer.java:1164) ~[paper-1.18.2.jar:git-Paper-387]
                                            [number:protected] => 22
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.MinecraftServer.lambda$spin$0(MinecraftServer.java:316) ~[paper-1.18.2.jar:git-Paper-387]
                                            [number:protected] => 23
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:833) ~[?:?]
                                            [number:protected] => 24
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:22:46] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => AuctionHouse-1.19-3.3.1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => plugins/AuctionHouse-1.19-3.3.1.jar
                                    [relativePath:protected] => 1
                                )

                            [2] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\ServerInstallDifferentVersionSolution Object
                                (
                                    [softwareVersion:protected] => 1.19
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => AuctionHouse-1.19-3.3.1
                    [pluginPath:protected] => plugins/AuctionHouse-1.19-3.3.1.jar
                    [apiVersion:protected] => 1.19
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.2", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'AuctionHouse-1.19-3.3.1' needs version '1.19' of the server software.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'AuctionHouse-1.19-3.3.1'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'plugins/AuctionHouse-1.19-3.3.1.jar'.", $analysis[1][1]->getMessage());
        $this->assertEquals("Install the version '1.19' of your server software.", $analysis[1][2]->getMessage());

    }
}