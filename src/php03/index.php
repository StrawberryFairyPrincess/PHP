<?php

// ファイルの読み込み
require_once('./config/status_codes.php');

// array_rand関数は値ではなく配列のキーをランダムに取得
$random_numbers = array_rand( $status_codes, 4 );

// デバッグ用
// echo('<pre>');
// var_dump($random_numbers);
// echo('</pre>');

foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
}

// デバッグ用
// echo('<pre>');
// var_dump( $options );
// echo('</pre>');

// mt_rand関数は最小値と最大値の範囲内で乱数を生成
$question = $options[mt_rand(0, 3)];
// array_rand関数でもできる
// $question = $options[array_rand( $options, 1 )];

// デバッグ用
// echo('<pre>');
// var_dump( $question );
// echo('</pre>');

?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/index.css">

    <title>Status Code Quiz</title>
</head>

<body>

    <!-- PHPはサーバサイド言語のためサーバを経由させないと見れない -->
    <!-- ⚪︎ http://localhost/php03/index.php -->
    <!-- × file:///Users/fairyprincess/coachtech/php/src/php03/index.php -->

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>

        <div class="quiz__content">

            <div class="question">
                <p class="question__text">
                    Q. 以下の内容に当てはまるステータスコードを選んでください
                </p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                </p>
            </div>

            <!-- 送信先をresult.phpファイルに指定 -->
            <form class="quiz-form" action="result.php" method="post">

                <!-- 解答となるデータを送信 -->
                <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">

                <div class="quiz-form__item">

                    <!-- PHPで提供される代替構文 -->
                    <?php foreach ($options as $option): ?>

                        <div class="quiz-form__group">

                            <!-- inputタグのid属性とlabelタグのfor属性に同じものを指定すると紐づられる -->
                            <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">

                            <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
                                <?php echo $option['code'] ?>
                            </label>

                        </div>

                    <!-- PHPで提供される代替構文 -->
                    <?php endforeach; ?>

                </div>

                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>

            </form>

        </div>

    </main>

</body>

</html>