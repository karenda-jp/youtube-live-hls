# youtube-live-hls　(m3u8 Get for IPTV)
# Youtube "Now on LIVE",,Archived or private videos cannot be played.
### 無償提供の終了
### Last Check Date -> (2025-04-11 JST 01:00)
試用提供は終了致しました。<br/>
当方のプログラムを日頃よりご使用、ご愛顧いただきありがとうございました。<br/>
<br/>
ローカルでホストする事により制限なく取得する事が可能です。<br/>
ぜひお買い求め下さい。<br/>
<br/>
サンプルプログラム(sample.php)について<br/>
機能を絞ってあります。唯一の機能が「?channel=」でのUC指定です。<br/>
?channel=UCから始まる24文字を指定する事によりライブ配信のm3u8をGetします。<br/>
他のコマンドやキャッシュ機能等は一切ありません。<br/>
また、同じチャンネルで複数のライブをやっていても「youtubeのデフォルトを取得します」<br/>
これは、実際にブラウザで当該youtubeへアクセスする事で確認が可能です「ライブ中アイコンをクリック」<br/>
※製品版では視聴者数の最も多い番組を解析/表示しています<br/>
英語圏 ローカル以外へ設置した場合「Sign in to confirm you’re not a bot.」と警告されて動作しません。<br/>
※エラー的には404表示(見つからない)となり使用者の外見上は判断できませんが、、、つまり、アクセス拒否で見えない。<br/>
ローカルであっても、シークレットウインドウでアクセスした際に毎回ログイン警告が出る方は動作しません。<br/>
日本語では「ログインしてbotではないことを確認してください」の事です。<br/>
個人のyoutube側でのIP-BAN具合により変わる為、当方と関係ありません。<br/>
製品版ではcookieをセットする事で警告の回避が可能です。<br/>
※ソースコードは難読化させて頂いてます。<br/>
復元すると分かる通り、単純なブラウザをエミュレーションする事で実現しております。<br/>
動作を考え、想像/企画/試行錯誤/バグ除去等に価値があります。<br/>

### This PHP program is being test-operated by "[@K_A_R_E_N](https://www.youtube.com/@K_A_R_E_N)" for the purpose of sale. Please try it out to see how it works.
<br/>

以下の内容はほとんどが製品版の説明になっています。<br/>

## 必ず最後までお読み下さい。
> [!CAUTION]
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

### 存在しないVideoIDやチャンネルを指定しないで下さい。
> [!CAUTION]
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
> 統計情報/サムネイル/存在確認　等のオプションは全て解除して下さい。<br/>
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
> [!CAUTION]
> 勘違いしないで下さい。<br/>
> 個人による"自作PHPプログラムの公開テスト"です。<br/>
> これは"公共の無料サービス"ではありません。<br/>

<br/>

## ユーザーデータの収集/公開への同意
IP,country,User-Agent,AccessTime,videoID<br/>


## 利用条件・注意事項
> [!CAUTION]
> 私の[Youtube Channel](https://youtube.com/@K_A_R_E_N??sub_confirmation=1) 任意登録する事。<br/>
> 記載されたリストを公開する場合は、このgitへのリンクをどこかに入れる事<br/>
> 個人の研究的 実験プログラムにつき、商用アプリ等への組み込み禁止<br/>
> Youtube仕様変更への対応が困難な場合は提供終了する場合があります。<br/>
> 個人プログラムの為、メンテナンス時等 アナウンス用の宣伝動画に差し替える事があります。<br/>

<br/>

# --------------------------------------------------------

## 指定できる Command について。 
#### ?video=xxxxxxxxxxx　(11 characters long) over cut 11.
> [!NOTE]
> 　Youtube LIVE video ID offer.<br/>
> 　11文字のvideoID のみを指定<br/>
> 　videoIDは配信側の RE:Try により変わる事があります。
> 　既に使われていないIDを指定し続ける事は禁止です。
<br/>

#### ?channel=UCxxxxxxxxxxx　start (UC)　(24 characters long) over cut 24.
> [!NOTE]
> 　Youtube LIVE Channel ID offer.<br/>
> 　24文字の"UC"から始まる24文字のみを指定<br/>
<br/>

#### ?nickname=@xxxxxxxxxxx　start (@)　(MAX 24 characters long) over cut 24.
> [!NOTE]
> 　Youtube LIVE Nick name offer.<br/>
> 　最大24文字以下の"@"から始まる文字を指定<br/>
> 　配信側で自由に設定変更が可能な為、非推奨での指定方法です。<br/>
> 　エラー頻発の頻度が高いため、この指定は使わないで下さい。<br/>
<br/>

# --------------------------------------------------------


# ●●●● WARNING ●●●●
~~~
 実際にyoutubeでライブを行っているのに認識されない場合は
　・ video と channel コマンド指定が間違っていませんか？ 
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
このPHPプログラムの販売が可能です。<br/>
１ライセンス 日本円で「20,000円」<br/>
アパッチ等サーバーとPHP8.3プログラムのインストール、cURL&SSL証明書の設定、cookieのブラウザからの抜き出し、編集等<br/>
取り扱いが可能で、日本語でコミュニケーション出来る方に限ります。<br/>
