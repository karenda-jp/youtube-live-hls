# youtube-live-hls　(m3u8 Get for IPTV)

### 障害情報：現在メンテナンス中　使用できません。(2025-03-27 JST)
ここに障害内容を表示するので、このgitをブックマークして下さい。<br/>

### 以前の私の日本国内のサーバーからのアクセスは遮断されて使えなくなりました。
my japan server ".jp/youtube/" アクセスしないで下さい。<br/>
<br/>

## 必ず最後までお読み下さい。
> [!WARNING]
> Please be sure to read to the end.
> If you are not fluent in Japanese,
>  please use the translation function of your browser.

## ライブ放送 配信者が観れる地域を設定しています。
> [!TIP]
> Server設置場所 (US amazon-aws IP)　=アメリカだと思う。(U.S.A.?)<br/>
> "US" & Your Code "??" 無い場合は観れません。

### ライブ配信者のページにあるVideoページのソース内を必ず調べて下さい。

###  ("regionsAllowed" US) が無ければ、放送を探す権利すらありません。
> [!TIP]
>　"watch?v=" が含まれているvideoページの事です。<br/>

### 存在しないIDやチャンネルを指定しない
> [!WARNING]
> 
> 永久にエラーでプログラムの負荷を高める迷惑行為です。
> 早急にリスト内から削除して下さい。<br/>
> リストに存在するだけで勝手に情報を集めるアプリがありますので<br/>
> 本当に削除して下さい。
> 不正リクエストを繰り返してサーバー規制が再び掛かる可能性があるのです。<br/>

## お使いのアプリの設定を必ず確認して下さい。
> [!WARNING]
> 統計情報/サムネイル/存在確認　等のオプションは全て外してく下さい。<br/>


### ユーチューブのライブ配信からm3u8を探してきます。
発見出来た場合は302ステータスコードでリダイレクトを掛けます。<br/>

### DoS Attack Protected.
送信されてきたデータを厳しくチェックしています。<br/>
余計な追加オプション等はエラーになります。<br/>

## 最終チェックパス→TEST デプロイ　※既にアクセスが可能です<br/>
テスト公開中です。<br/>


### ※日本のワンピース　観れなくなったなぁ、、、regionsAllowed content "JP"　ONLY.. (T-T)

## ユーザーデータの収集
IP,country,User-Agent,AccessTime,videoID<br/>


## 利用条件・注意事項
> [!CAUTION]
> 私のYoutube Channel 任意登録する事。<br/>
> 記載されたリストを公開する場合は、このgitへのリンクをどこかに入れる事<br/>
> 個人の研究的 実験プログラムにつき、商用アプリ等への組み込み禁止<br/>
> Youtube仕様変更への対応が困難な場合は終了する場合があります。<br/>

# -------------------------------------------------------------
## 指定できる Command について。
### ?video=xxxxxxxxxxx　(11 characters long) over cut 11.
　Youtube video ID offer.<br/>
　１１文字のvideoID のみを指定<br/>
　videoIDは配信側の RE:Try により変わる事があります。
　既に使われていないIDを指定し続ける事は禁止です。

### ?channel=UCxxxxxxxxxxx　start (UC)　(24 characters long) over cut 24.
　Youtube Channel ID offer.<br/>
　２４文字の"UC"から始まる24文字のみを指定<br/>

### ?channel=@xxxxxx　start (@)　(max 50 characters long) , over to "UC" offer change please.
　Youtube Channel Nick Name  offer.<br/>
　最大半角５０文字相当まで認識可能。<br/>
　超える場合は"UC"から始まる24文字での指定が確実<br/>

# -------------------------------------------------------------


# ●●●● WARNING ●●●●
~~~
 実際にyoutubeでライブを行っているのに認識されない場合は
　・ プログラムがyoutubeにIP規制されている
　・ WebブラウザでURLを開いてみて下さい。m3u8ダウンロードされますか？
　　 ダウンロードされたm3u8をVLCで再生できますか？　出来ない場合もリージョンカントリーエラーです。
　・ 404エラーの場合 US x　リージョンカントリーエラー
　・ 403エラーの場合 ごめんなさい、あなたのアクセスを禁止させて頂きました。
　　 リストを削除した上で、二度と私に関わりを持とうとしないで下さい。 good,bye for ever.
　・ youtubeの仕様変更  3～4日頻度で　新プレイヤーで規制掛けてきてます。正直、しんどい、、、
　   この場合も、404エラーになります。復旧までアクセスしないで下さい。
　   このgit上で恐らく　障害発生をアナウンスしています。
~~~
# ●●●● WARNING ●●●●

# ENJOY!!
