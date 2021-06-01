## brb

```plaintext
/brb
/brb <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Brb](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Brb.java)

バリアブロックを入手します。

### `/brb`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

バリアブロックをコマンド実行者のメインハンドのアイテムと置き換えます。

### `/brb <player>`

バリアブロックを指定したプレイヤーのメインハンドのアイテムと置き換えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | 説明なし |

## bug

```plaintext
/bug
/bug true
/bug false
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Bug](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Bug.java)

本によるIssueの作成を行います。

### `/bug`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

本によるIssueの作成を行います。

### `/bug true`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

本によりIssue作成処理を行います。

### `/bug false`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

記入済みの本を記入可能な本に戻します。

## calctree

```plaintext
/calctree [placeEdgeTree]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Calctree](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Calctree.java)

WorldEditの選択範囲で植木算を行います。

### `/calctree [placeEdgeTree]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

WorldEditの選択範囲で植木算を行います。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `placeEdgeTree` | BooleanArgument | いいえ | 両端に木を置くかどうか。 |

## chat

```plaintext
/chat <player> <message>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Chat](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Chat.java)

偽のプレイヤーに喋らせます。

### `/chat <player> <message>`

偽のプレイヤーに喋らせます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | StringArgument | はい | 説明なし |
| `message` | StringArgument | はい | 説明なし |

## chatban

```plaintext
/chatban add <player> <reason>
/chatban remove <player>
/chatban status [player]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_ChatBan](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_ChatBan.java)

ChatBanに関する処理を行います。

### `/chatban add <player> <reason>`

ターゲットをChatBanします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | はい | 説明なし |
| `reason` | StringArgument | はい | 説明なし |

### `/chatban remove <player>`

ターゲットのChatBanを解除します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | はい | 説明なし |

### `/chatban status [player]`

ChatBan一覧を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | いいえ | 説明なし |

## cmdb

```plaintext
/cmdb
/cmdb <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Cmdb](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Cmdb.java)

コマンドブロックを入手します。

### `/cmdb`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

コマンドブロックをコマンド実行者のメインハンドのアイテムと置き換えます。

### `/cmdb <player>`

コマンドブロックを指定したプレイヤーのメインハンドのアイテムと置き換えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | 説明なし |

## debstick

```plaintext
/debstick
/debstick <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Debstick](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Debstick.java)

デバッグステイックを入手します。

### `/debstick`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

デバッグステイックをコマンド実行者のメインハンドのアイテムと置き換えます。

### `/debstick <player>`

デバッグステイックを指定したプレイヤーのメインハンドのアイテムと置き換えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | 説明なし |

## ded

```plaintext
/ded
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Ded](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Ded.java)

最後に死亡した場所にテレポートします。

### `/ded`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

最後に死亡した場所にテレポートします。

## dedbull

```plaintext
/dedbull
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Dedbull](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Dedbull.java)

プレイヤーに暗視効果を付与します。すでに付与されている場合は削除します。

### `/dedbull`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

プレイヤーに暗視効果を付与します。すでに付与されている場合は削除します。

## dedmessage

```plaintext
/dedmessage
/dedmessage register <message>
/dedmessage disable
/dedmessage remove <id>
/dedmessage list [page]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DedMessage](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DedMessage.java)

カスタム死亡メッセージを設定します。

### `/dedmessage`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

今いる場所にカスタム死亡メッセージが設定されているかどうかを調べます。

### `/dedmessage register <message>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

カスタム死亡メッセージを登録します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `message` | StringArgument | はい | カスタム死亡メッセージ（%player% はプレイヤー名、%killer% はキルした人の名前に置き換わります） |

### `/dedmessage disable`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

死亡メッセージ表示を無効化します。

### `/dedmessage remove <id>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

カスタム死亡メッセージを削除します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `id` | IntegerArgument | はい | 説明なし |

### `/dedmessage list [page]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

カスタム死亡メッセージの一覧を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `page` | IntegerArgument | いいえ | 説明なし |

## delhome

```plaintext
/delhome
/delhome [name]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DelHome](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DelHome.java)

ホームを削除します。

- エイリアスがあります: `removehome, remhome`

### `/delhome`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

デフォルトホームを削除します。

### `/delhome [name]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定された名前のホームを削除します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

## discordlink

```plaintext
/discordlink <authKey>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DiscordLink](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DiscordLink.java)

DiscordアカウントとMinecraftアカウントを紐づけます。

### `/discordlink <authKey>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

DiscordアカウントとMinecraftアカウントを紐づけます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `authKey` | StringArgument | はい | 説明なし |

## dt

```plaintext
/dt <markerName>
/dt add <markerName> <markerType> [markerIcon]
/dt del <markerName>
/dt random
/dt near
/dt neartp
/dt list [page]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DT](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DT.java)

DynmapのMarkerを編集・テレポートします。

### `/dt <markerName>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

マーカーにテレポートさせます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `markerName` | StringArgument | はい | 説明なし |

### `/dt add <markerName> <markerType> [markerIcon]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

マーカーを追加します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `markerName` | StringArgument | はい | 説明なし |
| `markerType` | StringArgument | はい | 説明なし |
| `markerIcon` | StringArgument | いいえ | 説明なし |

### `/dt del <markerName>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

マーカーを削除します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `markerName` | StringArgument | はい | 説明なし |

### `/dt random`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ランダムに選ばれたマーカーにテレポートします。

### `/dt near`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

近くのマーカーを表示します。

### `/dt neartp`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

近くのマーカーにテレポートします。

### `/dt list [page]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

マーカーの一覧を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `page` | IntegerArgument | いいえ | 説明なし |

## eban

```plaintext
/eban add <player> <reason>
/eban remove <player>
/eban status [player]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_EBan](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_EBan.java)

EBanに関する処理を行います。

### `/eban add <player> <reason>`

ターゲットをEBanします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | はい | 説明なし |
| `reason` | StringArgument | はい | 説明なし |

### `/eban remove <player>`

ターゲットのEBanを解除します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | はい | 説明なし |

### `/eban status [player]`

EBan一覧を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | いいえ | 説明なし |

## elytra

```plaintext
/elytra
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Elytra](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Elytra.java)

プレイヤーにエリトラと花火を付与します。

### `/elytra`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

プレイヤーにエリトラと花火を付与します。

## flyspeed

```plaintext
/flyspeed [target]
/flyspeed set <percent>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_FlySpeed](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_FlySpeed.java)

クリエイティブ飛行速度を変更します。

### `/flyspeed [target]`

指定したプレイヤーのクリエイティブ飛行速度を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | PlayerArgument | いいえ | ターゲットプレイヤー |

### `/flyspeed set <percent>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

クリエイティブ飛行速度を設定します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `percent` | FloatArgument | はい | クリエイティブ飛行速度(通常100%) |

## g

```plaintext
/g
/g <gamemode>
/g <gamemode> <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_G](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_G.java)

ゲームモードを変更します。

- エイリアスがあります: `gm`

### `/g`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ゲームモードを切り替えます。

### `/g <gamemode>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定されたゲームモードに切り替えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `gamemode` | StringArgument | はい | 説明なし |

### `/g <gamemode> <player>`

指定されたプレイヤーのゲームモードを切り替えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `gamemode` | StringArgument | はい | 説明なし |
| `player` | PlayerArgument | はい | 説明なし |

## getlookloc

```plaintext
/getlookloc
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Getlookloc](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Getlookloc.java)

見ているブロックの座標を提案します。

### `/getlookloc`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

見ているブロックの座標を提案します。

## getuserkey

```plaintext
/getuserkey
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_GetUserKey](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_GetUserKey.java)

ユーザーを認証するためのキー(ユーザーキー)に関する操作を行います。

### `/getuserkey`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ユーザーキーを生成し、表示します。

## glookup

```plaintext
/glookup <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Glookup](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Glookup.java)

他人のゲームモードを確認します。

### `/glookup <player>`

他人のゲームモードを確認します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | 説明なし |

## hat

```plaintext
/hat
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Hat](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Hat.java)

手に持っているアイテムを頭に載せます。

### `/hat`

手に持っているアイテムを頭に載せます。

## head

```plaintext
/head
/head <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Head](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Head.java)

頭ブロックを入手します。

### `/head`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

自分の頭ブロックを入手します。

### `/head <player>`

指定したプレイヤーの頭ブロックを入手します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | StringArgument | はい | 説明なし |

## help

```plaintext
/help [params]
/help register
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Help](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Help.java)

ヘルプブックを取得・登録します。

- エイリアスがあります: `?`

### `/help [params]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ヘルプブックを取得します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `params` | StringArgument | いいえ | ヘルプパラメーター |

### `/help register`

ヘルプブックを登録します。

## hide

```plaintext
/hide
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Hide](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Hide.java)

他のプレイヤーから姿を隠します。

### `/hide`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

他のプレイヤーから姿を隠します。

## history

```plaintext
/history add <target> <message>
/history disable <target> <item>
/history notify <target> <item> <changeTo>
/history status <target>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_History](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_History.java)

jaoHistoryに関する操作を行います。

### `/history add <target> <message>`

指定したプレイヤーのjaoHistoryにデータを追加します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 説明なし |
| `message` | StringArgument | はい | 説明なし |

### `/history disable <target> <item>`

指定したプレイヤーのjaoHistory項目を無効化します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 説明なし |
| `item` | IntegerArgument | はい | 説明なし |

### `/history notify <target> <item> <changeTo>`

指定したプレイヤーのjaoHistory項目の通知設定を行います。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 説明なし |
| `item` | IntegerArgument | はい | 説明なし |
| `changeTo` | BooleanArgument | はい | 説明なし |

### `/history status <target>`

指定したプレイヤーのjaoHistory情報を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 説明なし |

## home

```plaintext
/home
/home [name]
/home list [Page]
/home view [name]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Home](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Home.java)

ホームにテレポートします。

### `/home`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

デフォルトホームにテレポートします。

### `/home [name]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定された名前のホームにテレポートします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

### `/home list [Page]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ホーム一覧を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `Page` | IntegerArgument | いいえ | 説明なし |

### `/home view [name]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定したホームに関する情報を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

## jail

```plaintext
/jail add <player> <reason>
/jail remove <player>
/jail status [player]
/jail testment <message>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Jail](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Jail.java)

Jailに関する処理を行います。

### `/jail add <player> <reason>`

ターゲットをJailします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | はい | 説明なし |
| `reason` | StringArgument | はい | 説明なし |

### `/jail remove <player>`

ターゲットのJailを解除します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | はい | 説明なし |

### `/jail status [player]`

Jail一覧を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | OfflinePlayerArgument | いいえ | 説明なし |

### `/jail testment <message>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

遺言を記録します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `message` | StringArgument | はい | 説明なし |

## lead

```plaintext
/lead set [target]
/lead connect <from> <to>
/lead leave [target]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Lead](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Lead.java)

Mob（またはプレイヤー）にリードを付けます。

### `/lead set [target]`

1辺30ブロックの立方体内にある指定されたターゲットセレクターの[Mob]にリードを付けます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | SingleEntitySelectorArgument | いいえ | 対象のMob。指定しない場合見ているMob |

### `/lead connect <from> <to>`

[Mob（またはプレイヤー）]から、[Mob]にリードを付けます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `from` | SingleEntitySelectorArgument | はい | リードを持っている側のMob（またはプレイヤー） |
| `to` | SingleEntitySelectorArgument | はい | リードを付けられる側のMob |

### `/lead leave [target]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

[Mob（または実行者）]が付けられているか、持っているリードを外します。両方の場合は付けられているリードを優先します

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | SingleEntitySelectorArgument | いいえ | 対象のMob（または実行者）。対象を指定しない場合見ているMob、何も見ていない場合実行者 |

## link

```plaintext
/link
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Link](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Link.java)

linkコマンドはjMS Gamers Clubで実行するのだ。

### `/link`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

linkコマンドはjMS Gamers Clubで実行するのだ。

## logintext

```plaintext
/logintext
/logintext <loginText>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_LoginText](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_LoginText.java)

ログイン時に表示されるテキストに任意のテキストを追加します。

### `/logintext`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ログイン時に表示されるテキストをリセットします。

### `/logintext <loginText>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ログイン時に表示されるテキストに任意のテキストを追加します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `loginText` | StringArgument | はい | 説明なし |

## looking

```plaintext
/looking
/looking on <target>
/looking off
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Looking](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Looking.java)

プレイヤーを見続けます。

- エイリアスがあります: `eye, see, look`

### `/looking`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

今見ているプレイヤーを見続けはじめます。

### `/looking on <target>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

プレイヤーを見続けはじめます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | PlayerArgument | はい | 説明なし |

### `/looking off`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

プレイヤーを見続けるのをやめます。

## makecmd

```plaintext
/makecmd
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_MakeCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_MakeCmd.java)

giveコマンドを生成します。

- エイリアスがあります: `givecmd`

### `/makecmd`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

giveコマンドを生成します。

## mymaid4

```plaintext
/mymaid4 reload-blacklist
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_MyMaid4](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_MyMaid4.java)

MyMaid4基本コマンド

### `/mymaid4 reload-blacklist`

MyMaid4基本コマンド

## pigeon

```plaintext
/pigeon speaker add <speaker>
/pigeon messages add <message>
/pigeon speaker remove [speaker]
/pigeon messages remove [message]
/pigeon speaker list
/pigeon messages list
/pigeon broadcast [messageId]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Pigeon](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Pigeon.java)

伝書鳩ちゃんにお願いを伝えます。

- エイリアスがあります: `messenger`

### `/pigeon speaker add <speaker>`

伝書鳩ちゃんにスピーカーを追加してもらいます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `speaker` | StringArgument | はい | 説明なし |

### `/pigeon messages add <message>`

伝書鳩ちゃんにメッセージを追加してもらいます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `message` | StringArgument | はい | 説明なし |

### `/pigeon speaker remove [speaker]`

伝書鳩ちゃんにスピーカーを削除してもらいます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `speaker` | StringArgument | いいえ | 説明なし |

### `/pigeon messages remove [message]`

伝書鳩ちゃんにメッセージを削除してもらいます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `message` | StringArgument | いいえ | 説明なし |

### `/pigeon speaker list`

伝書鳩ちゃんにスピーカーが誰がいるか聞きます。

### `/pigeon messages list`

伝書鳩ちゃんにメッセージが何があるか聞きます。

### `/pigeon broadcast [messageId]`

伝書鳩ちゃんにメッセージを配信してもらいます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `messageId` | IntegerArgument | いいえ | 説明なし |

## player

```plaintext
/player
/player <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Player](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Player.java)

プレイヤーの権限グループを取得します。

- エイリアスがあります: `group`

### `/player`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

あなたの権限グループを表示します。

### `/player <player>`

指定されたプレイヤーの権限グループを表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | StringArgument | はい | 説明なし |

## respawn

```plaintext
/respawn <player>
/respawn <player> <delay>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Respawn](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Respawn.java)

プレイヤーをリスポーンします。

### `/respawn <player>`

指定したプレイヤーをリスポーンします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | リスポーンさせるプレイヤー |

### `/respawn <player> <delay>`

指定した秒数後にプレイヤーをリスポーンします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | リスポーンさせるプレイヤー |
| `delay` | LongArgument | はい | 遅延させる秒数 |

## rider

```plaintext
/rider [target]
/rider ride <from> <to>
/rider leave [target]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Rider](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Rider.java)

プレイヤーやエンティティに乗ったり下ろしたりします。

### `/rider [target]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

プレイヤー・エンティティに乗ります。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | SingleEntitySelectorArgument | いいえ | 対象のプレイヤー・エンティティ。指定しない場合見ているプレイヤー |

### `/rider ride <from> <to>`

プレイヤー・エンティティをプレイヤー・エンティティに乗せます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `from` | SingleEntitySelectorArgument | はい | 乗せるプレイヤー・エンティティ |
| `to` | SingleEntitySelectorArgument | はい | 乗せられるプレイヤー・エンティティ |

### `/rider leave [target]`

乗っているプレイヤー・エンティティを下ろします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | SingleEntitySelectorArgument | いいえ | 対象のプレイヤー・エンティティ。指定しない場合実行者 |

## selclick

```plaintext
/selclick
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Selclick](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Selclick.java)

SelClickの有効/無効を切り替えます。

### `/selclick`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

SelClickの有効/無効を切り替えます。

## sethome

```plaintext
/sethome
/sethome [name]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_SetHome](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_SetHome.java)

ホームを設定します。

- エイリアスがあります: `addhome`

### `/sethome`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

デフォルトホームを設定します。

### `/sethome [name]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定された名前のホームを設定します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

## show

```plaintext
/show
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Show](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Show.java)

Hide状態を解除します。

### `/show`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

Hide状態を解除します。

## sign

```plaintext
/sign editmode [changeTo]
/sign set <line> <text>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Sign](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Sign.java)

看板を編集します。

### `/sign editmode [changeTo]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

看板編集モードをオン・オフします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `changeTo` | BooleanArgument | いいえ | オン・オフのいずれか (未指定の場合トグル) |

### `/sign set <line> <text>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

看板の指定行のテキストを置き換えします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `line` | IntegerArgument | はい | 編集する行 |
| `text` | StringArgument | はい | 置き換えるテキスト |

## skkcolor

```plaintext
/skkcolor
/skkcolor <color>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_SKKColor](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_SKKColor.java)

チャット欄に表示される四角の色を変更します。

### `/skkcolor`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

チャット欄に表示される四角の色をリセットします。

### `/skkcolor <color>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

チャット欄に表示される四角の色を変更します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `color` | StringArgument | はい | 説明なし |

## spawn

```plaintext
/spawn
/spawn true
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Spawn](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Spawn.java)

スポーン地点にテレポートします。

### `/spawn`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

ワールドのスポーン地点にテレポートします。

### `/spawn true`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

あなたのスポーン地点にテレポートします。

## tempmute

```plaintext
/tempmute [changeTo]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_TempMute](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_TempMute.java)

一時的なミュートを実施します。運営のみ使用できます。

### `/tempmute [changeTo]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

TempMuteをオン・オフします。指定しない場合、トグルで変更します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `changeTo` | BooleanArgument | いいえ | 説明なし |

## test

```plaintext
/test version
/test database
/test nbt
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Test](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Test.java)

MyMaidテストコマンド

### `/test version`

MyMaidテストコマンド

### `/test database`

MyMaidテストコマンド

### `/test nbt`

MyMaidテストコマンド

## testment

```plaintext
/testment <message>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Testment](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Testment.java)

Jailの遺言を残します。jail testmentのエイリアスです。

### `/testment <message>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

遺言を記録します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `message` | StringArgument | はい | 説明なし |

## time

```plaintext
/time set <timeName> [isRelative]
/time add <timeInt> [isRelative]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Time](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Time.java)

自分だけに適用される時間を設定します。

### `/time set <timeName> [isRelative]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

自分だけに適用される時間を設定します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `timeName` | StringArgument | はい | 説明なし |
| `isRelative` | BooleanArgument | いいえ | 説明なし |

### `/time add <timeInt> [isRelative]`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

自分だけに適用される時間を進めます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `timeInt` | IntegerArgument | はい | 説明なし |
| `isRelative` | BooleanArgument | いいえ | 説明なし |

## tpdeny

```plaintext
/tpdeny add <target>
/tpdeny remove <target>
/tpdeny notify <target> <changeTo>
/tpdeny list
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_TpDeny](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_TpDeny.java)

TpDeny(特定ユーザーからのテレポート拒否)の設定をします。

### `/tpdeny add <target>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

TpDenyにプレイヤーを追加し、以降のテレポートを拒否します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 拒否する対象プレイヤー |

### `/tpdeny remove <target>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

TpDenyからプレイヤーを解除し、以降のテレポートを許可します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 解除する対象プレイヤー |

### `/tpdeny notify <target> <changeTo>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

テレポートを拒否した場合に通知するかどうかを設定します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 通知設定する対象プレイヤー |
| `changeTo` | EnumArgument | はい | 通知をするか |

### `/tpdeny list`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

現在TpDenyに追加されている(テレポートを拒否されている)プレイヤーの一覧を表示します。

## walkspeed

```plaintext
/walkspeed [target]
/walkspeed set <percent>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_WalkSpeed](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_WalkSpeed.java)

移動速度を変更します。

### `/walkspeed [target]`

指定したプレイヤーの移動速度を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | PlayerArgument | いいえ | ターゲットプレイヤー |

### `/walkspeed set <percent>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

移動速度を設定します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `percent` | FloatArgument | はい | 移動速度(通常100%) |

## weather

```plaintext
/weather set <weatherName>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Weather](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Weather.java)

自分だけに適用される天気を設定します。

### `/weather set <weatherName>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

自分だけに適用される天気を設定します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `weatherName` | StringArgument | はい | 説明なし |

## wire

```plaintext
/wire set <pos1> <pos2>
/wire setwe
/wire del <pos1> <pos2>
/wire delwe
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Wire](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Wire.java)

指定した地点間にリードを張ったり、撤去したりします。

- エイリアスがあります: `leadunit`

### `/wire set <pos1> <pos2>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定した2点間にリードを張ります。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `pos1` | ArgumentTriplet | はい | 1つ目のx・y・z座標。リードを付けられている側。 |
| `pos2` | ArgumentTriplet | はい | 2つ目のx・y・z座標。リードを持っている側。 |

### `/wire setwe`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

WorldEditで選択した地点間にリードを張ります。3地点以上を選択した場合、1-2,2-3,3-4地点間のようにリードが張られますが、選択した地点は全て同じ高さである必要があります。

### `/wire del <pos1> <pos2>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定した2点間のリードを撤去します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `pos1` | ArgumentTriplet | はい | 1つ目のx・y・z座標。どちら側でも良いです。 |
| `pos2` | ArgumentTriplet | はい | 2つ目のx・y・z座標。どちら側でも良いです。 |

### `/wire delwe`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

WorldEditで選択した地点間のリードを撤去します。3地点以上を選択した場合、1-2,2-3,3-4地点間のようにリードが撤去されますが、選択した地点は全て同じ高さである必要があります。

## wt

```plaintext
/wt <worldName>
/wt <worldName> <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Wt](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Wt.java)

他ワールドにテレポートします。

### `/wt <worldName>`

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

指定したワールドにテレポートします。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `worldName` | StringArgument | はい | 説明なし |

### `/wt <worldName> <player>`

指定したプレイヤーを指定したワールドにテレポートさせます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `worldName` | StringArgument | はい | 説明なし |
| `player` | PlayerArgument | はい | 説明なし |
