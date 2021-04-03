## logintext

```plaintext
/logintext
/logintext <loginText>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_LoginText](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_LoginText.java)

ログイン時に表示されるテキストに任意のテキストを追加します。

### `/logintext`

ログイン時に表示されるテキストをリセットします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/logintext <loginText>`

ログイン時に表示されるテキストに任意のテキストを追加します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `loginText` | StringArgument | はい | 説明なし |

## brb

```plaintext
/brb
/brb <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Brb](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Brb.java)

バリアブロックを入手します。

### `/brb`

バリアブロックをコマンド実行者のメインハンドのアイテムと置き換えます。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/brb <player>`

バリアブロックを指定したプレイヤーのメインハンドのアイテムと置き換えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | 説明なし |

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

## delhome

```plaintext
/delhome
/delhome [name]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DelHome](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DelHome.java)

ホームを削除します。

- エイリアスがあります: `removehome, remhome`

### `/delhome`

デフォルトホームを削除します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/delhome [name]`

指定された名前のホームを削除します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

## dt

```plaintext
/dt <markerName>
/dt add <markerName> <markerType> [markerIcon]
/dt del <markerName>
/dt random
/dt near
/dt list [page]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DT](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DT.java)

DynmapのMarkerを編集・テレポートします。

### `/dt <markerName>`

マーカーにテレポートさせます。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `markerName` | StringArgument | はい | 説明なし |

### `/dt add <markerName> <markerType> [markerIcon]`

マーカーを追加します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `markerName` | StringArgument | はい | 説明なし |
| `markerType` | StringArgument | はい | 説明なし |
| `markerIcon` | StringArgument | いいえ | 説明なし |

### `/dt del <markerName>`

マーカーを削除します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `markerName` | StringArgument | はい | 説明なし |

### `/dt random`

ランダムに選ばれたマーカーにテレポートします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/dt near`

近くのマーカーを表示します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/dt list [page]`

マーカーの一覧を表示します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `page` | IntegerArgument | いいえ | 説明なし |

## g

```plaintext
/g
/g <gamemode>
/g <gamemode> <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_G](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_G.java)

ゲームモードを変更します。

### `/g`

ゲームモードを切り替えます。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/g <gamemode>`

指定されたゲームモードに切り替えます。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `gamemode` | StringArgument | はい | 説明なし |

### `/g <gamemode> <player>`

指定されたプレイヤーのゲームモードを切り替えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `gamemode` | StringArgument | はい | 説明なし |
| `player` | PlayerArgument | はい | 説明なし |

## elytra

```plaintext
/elytra
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Elytra](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Elytra.java)

プレイヤーにエリトラと花火を付与します。

### `/elytra`

プレイヤーにエリトラと花火を付与します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## tempmute

```plaintext
/tempmute [changeTo]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_TempMute](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_TempMute.java)

一時的なミュートを実施します。運営のみ使用できます。

### `/tempmute [changeTo]`

TempMuteをオン・オフします。指定しない場合、トグルで変更します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `changeTo` | BooleanArgument | いいえ | 説明なし |

## discordlink

```plaintext
/discordlink <authKey>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_DiscordLink](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_DiscordLink.java)

DiscordアカウントとMinecraftアカウントを紐づけます。

### `/discordlink <authKey>`

DiscordアカウントとMinecraftアカウントを紐づけます。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `authKey` | StringArgument | はい | 説明なし |

## history

```plaintext
/history add <target> <message>
/history disable <target> <item>
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

### `/history status <target>`

指定したプレイヤーのjaoHistory情報を表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `target` | OfflinePlayerArgument | はい | 説明なし |

## cmdb

```plaintext
/cmdb
/cmdb <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Cmdb](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Cmdb.java)

コマンドブロックを入手します。

### `/cmdb`

コマンドブロックをコマンド実行者のメインハンドのアイテムと置き換えます。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/cmdb <player>`

コマンドブロックを指定したプレイヤーのメインハンドのアイテムと置き換えます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | PlayerArgument | はい | 説明なし |

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

遺言を記録します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `message` | StringArgument | はい | 説明なし |

## dedbull

```plaintext
/dedbull
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Dedbull](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Dedbull.java)

プレイヤーに暗視効果を付与します。すでに付与されている場合は削除します。

### `/dedbull`

プレイヤーに暗視効果を付与します。すでに付与されている場合は削除します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## getuserkey

```plaintext
/getuserkey
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_GetUserKey](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_GetUserKey.java)

ユーザーを認証するためのキー(ユーザーキー)に関する操作を行います。

### `/getuserkey`

ユーザーキーを生成し、表示します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

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

## link

```plaintext
/link
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Link](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Link.java)

linkコマンドはjMS Gamers Clubで実行するのだ。

### `/link`

linkコマンドはjMS Gamers Clubで実行するのだ。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## skkcolor

```plaintext
/skkcolor
/skkcolor <color>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_SKKColor](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_SKKColor.java)

チャット欄に表示される四角の色を変更します。

### `/skkcolor`

チャット欄に表示される四角の色をリセットします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/skkcolor <color>`

チャット欄に表示される四角の色を変更します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `color` | StringArgument | はい | 説明なし |

## show

```plaintext
/show
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Show](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Show.java)

Hide状態を解除します。

### `/show`

Hide状態を解除します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## head

```plaintext
/head
/head <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Head](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Head.java)

頭ブロックを入手します。

### `/head`

自分の頭ブロックを入手します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/head <player>`

指定したプレイヤーの頭ブロックを入手します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | StringArgument | はい | 説明なし |

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

## test

```plaintext
/test version
/test database
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Test](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Test.java)

MyMaidテストコマンド

### `/test version`

MyMaidテストコマンド

### `/test database`

MyMaidテストコマンド

## ded

```plaintext
/ded
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Ded](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Ded.java)

最後に死亡した場所にテレポートします。

### `/ded`

最後に死亡した場所にテレポートします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## hide

```plaintext
/hide
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Hide](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Hide.java)

他のプレイヤーから姿を隠します。

### `/hide`

他のプレイヤーから姿を隠します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## player

```plaintext
/player
/player <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Player](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Player.java)

プレイヤーの権限グループを取得します。

- エイリアスがあります: `group`

### `/player`

あなたの権限グループを表示します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/player <player>`

指定されたプレイヤーの権限グループを表示します。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `player` | StringArgument | はい | 説明なし |

## getlookloc

```plaintext
/getlookloc
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Getlookloc](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Getlookloc.java)

見ているブロックの座標を提案します。

### `/getlookloc`

見ているブロックの座標を提案します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

## wt

```plaintext
/wt <worldName>
/wt <worldName> <player>
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_Wt](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_Wt.java)

他ワールドにテレポートします。

### `/wt <worldName>`

指定したワールドにテレポートします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `worldName` | StringArgument | はい | 説明なし |

### `/wt <worldName> <player>`

指定したプレイヤーを指定したワールドにテレポートさせます。

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `worldName` | StringArgument | はい | 説明なし |
| `player` | PlayerArgument | はい | 説明なし |

## sethome

```plaintext
/sethome
/sethome [name]
```

> ソースコード: [com.jaoafa.mymaid4.command.Cmd_SetHome](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/command/Cmd_SetHome.java)

ホームを設定します。

- エイリアスがあります: `addhome`

### `/sethome`

デフォルトホームを設定します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/sethome [name]`

指定された名前のホームを設定します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

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

デフォルトホームにテレポートします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

### `/home [name]`

指定された名前のホームにテレポートします。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |

### `/home list [Page]`

ホーム一覧を表示します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `Page` | IntegerArgument | いいえ | 説明なし |

### `/home view [name]`

指定したホームに関する情報を表示します。

<aside class="notice">
このコマンドはプレイヤーからの実行のみに制限されています。
</aside>

| 引数名 | 種類 | 必須か | 説明 |
| - | - | - | - |
| `name` | StringArgument | いいえ | 説明なし |
