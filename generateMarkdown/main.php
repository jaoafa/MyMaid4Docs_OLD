<?php

//$docs = file_get_contents(__DIR__ . "/docs.json");
$docs = file_get_contents("http://localhost:31001/docs");
$docs = json_decode($docs, true);

foreach ($http_response_header as $header) {
    if (substr($header, 0, strlen("Server: MyMaid Server (")) == "Server: MyMaid Server (") {
        $version = substr($header, strlen("Server: MyMaid Server ("), strlen($header) - strlen("Server: MyMaid Server (") - 1);
    }
}

if (!file_exists("source/includes")) {
    echo "カレントディレクトリが適切ではありません。\n";
    exit(1);
}

file_put_contents("source/includes/_version.md", "- Version: `$version`");

// Commands ---------------------------------- //

$markdown = [];

$commands = $docs["commands"];
uasort($commands, function ($a, $b) {
    if ($a["name"] == $b["name"]) {
        return 0;
    }
    return ($a["name"] < $b["name"]) ? -1 : 1;
});

foreach ($commands as $command) {
    $markdown[] = "## " . $command["name"];
    $markdown[] = "";

    $markdown[] = "```plaintext";
    foreach ($command["subcommands"] as $subcommand) {
        $args = [];
        foreach ($subcommand["arguments"] as $argument) {
            if ($argument["class"] == "cloud.commandframework.arguments.StaticArgument") {
                $before = "";
                $after = "";
            } elseif ($argument["isRequired"]) {
                $before = "<";
                $after = ">";
            } else {
                $before = "[";
                $after = "]";
            }
            $args[] = $before . $argument["name"] . $after;
        }
        $markdown[] = "/" .  implode(" ", $args);
    }
    $markdown[] = "```";
    $markdown[] = "";

    $markdown[] = "> ソースコード: [" . $command["class"] . "](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/" . str_replace(".", "/", $command["class"]) . ".java)";
    $markdown[] = "";

    $markdown[] = $command["description"];
    $markdown[] = "";

    if (count($command["alias"]) != 0) {
        $markdown[] = "- エイリアスがあります: `" . implode(", ", $command["alias"]) . "`";
        $markdown[] = "";
    }

    foreach ($command["subcommands"] as $subcommand) {
        $args = [];
        foreach ($subcommand["arguments"] as $argument) {
            if ($argument["class"] == "cloud.commandframework.arguments.StaticArgument") {
                $before = "";
                $after = "";
            } elseif ($argument["isRequired"]) {
                $before = "<";
                $after = ">";
            } else {
                $before = "[";
                $after = "]";
            }
            $args[] = $before . $argument["name"] . $after;
        }
        $markdown[] = "### `/" . implode(" ", $args) . "`";
        $markdown[] = "";

        if (isset($subcommand["senderType"])) {
            if ($subcommand["senderType"] == "org.bukkit.entity.Player") {
                $markdown[] = "<aside class=\"notice\">";
                $markdown[] = "このコマンドはプレイヤーからの実行のみに制限されています。";
                $markdown[] = "</aside>";
                $markdown[] = "";
            }
        }

        if (isset($subcommand["meta"]["description"])) {
            $markdown[] = $subcommand["meta"]["description"];
            $markdown[] = "";
        }

        if (isset($subcommand["alias"]) && count($subcommand["alias"]) != 0) {
            $markdown[] = "- エイリアスがあります: `" . implode(", ", $subcommand["alias"]) . "`";
            $markdown[] = "";
        }

        $argsTable = [];
        foreach (array_slice($subcommand["arguments"], 1) as $argument) {
            $argTable = ["`" . $argument["name"] . "`"];
            $argTable[] = substr($argument["class"], strrpos($argument["class"], ".") + 1);

            if ($argument["class"] == "cloud.commandframework.arguments.StaticArgument") {
                continue;
            } elseif ($argument["isRequired"]) {
                $argTable[] = "はい";
            } else {
                $argTable[] = "いいえ";
            }
            $argTable[] = isset($argument["description"]) ? $argument["description"] : "説明なし";

            $argsTable[] = "| " . implode(" | ", $argTable) . " |";
        }

        if (count($argsTable) != 0) {
            $markdown[] = "| 引数名 | 種類 | 必須か | 説明 |";
            $markdown[] = "| - | - | - | - |";
            $markdown[] = implode("\n", $argsTable);
            $markdown[] = "";
        }
    }
}
file_put_contents("source/includes/_commands.md", implode("\n", $markdown));

$markdown = [];
$events = $docs["events"];
uasort($events, function ($a, $b) {
    if ($a["class"] == $b["class"]) {
        return 0;
    }
    return ($a["class"] < $b["class"]) ? -1 : 1;
});
foreach ($events as $event) {
    $markdown[] = "### " . substr($event["class"], strrpos($event["class"], "Event_"));
    $markdown[] = "";
    $markdown[] = $event["description"];
    $markdown[] = "";
    if (isset($event["methods"]) && count($event["methods"]) != 0) {
        $markdown[] = "| メソッド名 | イベント |";
        $markdown[] = "| - | - |";
        $methods = $event["methods"];
        usort($methods, function ($a, $b) {
            if ($a["name"] == $b["name"]) {
                return 0;
            }
            return ($a["name"] < $b["name"]) ? 1 : -1;
        });
        foreach ($methods as $method) {
            $markdown[] = "| " . $method["name"] . " | " . substr($method["event"], strrpos($method["event"], ".") + 1) . " |";
        }
    }
    $markdown[] = "> ソースコード: [" . $event["class"] . "](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/" . str_replace(".", "/", $event["class"]) . ".java)";
    $markdown[] = "";
}
file_put_contents("source/includes/_events.md", implode("\n", $markdown));
