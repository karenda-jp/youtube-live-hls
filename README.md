# youtube-live-hls　(m3u8 Get for IPTV)

### 障害情報：現在正常に取得/稼働しております。
### Last Check Date -> (2025-03-31 JST 12:00)
ここに障害内容を表示します、このgitをブックマークして下さい。<br/>

### 以前の私の日本国内のサーバーからのアクセスは遮断されて使えなくなりました。

## 必ず最後までお読み下さい。
> [!WARNING]
> Please be sure to read to the end.<br/>
> If you are not fluent in Japanese,<br/>
>  please use the translation function of your browser.<br/>

<br/>

## ライブ放送 配信者が観れる地域を設定しています。
> [!TIP]
> Server設置場所 (JP IP)　日本<br/>
<br/>

### ライブ配信者のページにあるVideoページのソース内を必ず調べて下さい。
あなたに見えている放送が、JPを許可していなければ表示されません。<br/>
<br/>

###  ("regionsAllowed" JP) が無ければ、放送を探す権利すらありません。
> [!TIP]
>　"watch?v=" が含まれているvideoページの事です。<br/>
>　[チェックツール](https://www.lenostube.com/en/youtube-country-restriction-checker/)を使うと簡単かも知れません。 "Video is unrestricted" OK?<br/>
> ("JP" & Your Code) 無ければ 404 Error.<br/>

### 存在しないIDやチャンネルを指定しないで下さい。
> [!WARNING]
> 
> 永久にエラーでプログラムの負荷を高める迷惑行為です。
> 早急にリスト内から削除して下さい。<br/>
> リストに存在するだけで勝手に情報を集めるアプリがありますので<br/>
> 本当に削除して下さい。
> あなたではなく、私が不正リクエストを繰り返してしまうのです。
> IP規制が再び発生する可能性があります。<br/>
<br/>

## お使いのアプリの設定を必ず確認して下さい。
> [!CAUTION]
> 統計情報/サムネイル/存在確認　等のオプションは全て外してく下さい。<br/>
> 初期設定でサーバーに迷惑なオプションがデフォルトでONされている事があります。
> 秒間数十件のリクエスト・・迷惑です。
<br/>

### ユーチューブのライブ配信からm3u8をあなたに代わって探してきます。
発見出来た場合は302ステータスコードでリダイレクトを掛けます。<br/>
発見出来ない場合は404応答します。<br/>


### DoS Attack Protected.
送信されてきたデータを厳しくチェックしています。<br/>
余計な追加オプション等はエラーになります。<br/>
<br/>

## 最終チェックパス→TEST デプロイ　※既にアクセスが可能です<br/>
> [!WARNING]
> 勘違いしないで下さい。<br/>
> 個人による"自作PHPプログラムの公開テスト"です。<br/>
> これは"公共の無料サービス"ではありません。<br/>

<br/>

## ユーザーデータの収集
IP,country,User-Agent,AccessTime,videoID<br/>


## 利用条件・注意事項
> [!CAUTION]
> 私の[Youtube Channel](https://youtube.com/@K_A_R_E_N??sub_confirmation=1) 任意登録する事。<br/>
> 記載されたリストを公開する場合は、このgitへのリンクをどこかに入れる事<br/>
> 個人の研究的 実験プログラムにつき、商用アプリ等への組み込み禁止<br/>
> Youtube仕様変更への対応が困難な場合は提供終了する場合があります。<br/>

# --------------------------------------------------------
## 指定できる Command について。
#### ?video=xxxxxxxxxxx　(11 characters long) over cut 11.
> [!NOTE]
> 　Youtube video ID offer.<br/>
> 　11文字のvideoID のみを指定<br/>
> 　videoIDは配信側の RE:Try により変わる事があります。
> 　既に使われていないIDを指定し続ける事は禁止です。
<br/>

#### ?channel=UCxxxxxxxxxxx　start (UC)　(24 characters long) over cut 24.
> [!NOTE]
> 　Youtube Channel ID offer.<br/>
> 　24文字の"UC"から始まる24文字のみを指定<br/>
<br/>

#### ?channel=@xxxxxx　start (@)　(max 50 characters long) , over to "UC" offer change please.
> [!NOTE]
> 　Youtube Channel Nick Name  offer.<br/>
> 　最大半角50文字相当まで認識可能。<br/>
> 　超える場合は"UC"から始まる24文字での指定へ変更する事<br/>
<br/>

# --------------------------------------------------------

以上の事を踏まえて　新サイトはコレだ！！！！　　↓<br/>
# ///////////////////////////////////////////////
~~~
Channel ID offer.
Weathernews Japan.
https://yt-hls-get-v2.x0.to/youtube/?channel=UCNsidkYpIAQ4QaufptQBPHQ
https://www.youtube.com/channel/UCNsidkYpIAQ4QaufptQBPHQ


Channel @Nick Name offer.
Pokemon Japan. KIDS
https://yt-hls-get-v2.x0.to/youtube/?channel=@pokemonkidstvJP
https://www.youtube.com/@pokemonkidstvJP


Video ID offer.
J-POP avex 24/7 Music Live
https://yt-hls-get-v2.x0.to/youtube/?video=tr77RbnfYIU
https://www.youtube.com/watch?v=tr77RbnfYIU


~~~
# ●●●● WARNING ●●●●
~~~
 実際にyoutubeでライブを行っているのに認識されない場合は
　・ プログラムがyoutubeにIP規制されている
　・ WebブラウザでURLを開いてみて下さい。m3u8ダウンロードされますか？
　　 ダウンロードされたm3u8をVLCで再生できますか？　出来ない場合もリージョンカントリーエラーです。
　・ 404エラーの場合 JP x　リージョンカントリーエラー
　・ 403エラーの場合 ごめんなさい、あなたのアクセスを禁止させて頂きました。
　　 リストを削除した上で、二度と私に関わりを持とうとしないで下さい。 good bye, for ever.
　・ youtubeの仕様変更  3～4日頻度で　新プレイヤーで規制掛けてきてます。正直、しんどい、、、
　   この場合も、404エラーになります。復旧までアクセスしないで下さい。
　   このgit上で恐らく　障害発生をアナウンスしています。
　・ キャッシュを搭載しています。再度取得するのは1～2時間後です。
　・ WAF system on.　(一部アプリや、国際アクセス等を自動的に遮断する可能性があります)
~~~
# ●●●● WARNING ●●●●

# ENJOY!!
