<?php

// ファイルの読み込み
require_once('config/status_codes.php');

// エスケープ処理
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

// データが正しく送信されなかった時の処理
if (!$option) {

    // header関数は、別ページに移動させたり、リダイレクトを行ったりする
    header('Location: index.php');
}

// 解答コードと配列が合致した時のみ必要となるデータを取得
foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}

// 変数optionと変数codeが合致したものを変数resultに代入
$result = $option === $code;

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/result.css">

    <title>Status Code Quiz Result</title>
</head>
<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="result__content">

            <div class="result">
                <?php if ($result): ?>
                    <h2 class="result__text--correct">
                        正解
                    </h2>
                <?php else: ?>
                    <h2 class="result__text--incorrect">
                        不正解
                    </h2>
                <?php endif; ?>
            </div>


            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">

                        <th class="answer-table__header">
                            ステータスコード
                        </th>
                        <td class="answer-table__text">
                            <!-- 正解ステータスコード -->
                            <?php echo $code ?>
                        </td>
                    </tr>

                    <tr class="answer-table__row">
                        <th class="answer-table__header">
                            説明
                        </th>
                        <td class="answer-table__text">
                            <!-- 正解の説明 -->
                            <?php echo $description ?>
                        </td>
                    </tr>

                </table>
            </div>


        </div>
    </main>

</body>
</html>