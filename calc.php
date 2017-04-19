<html>
    <head>
        <link rel="stylesheet" href="styles/styles.css">
        <title>Калькулятор Осаго</title>
        <meta charset="utf8">
    </head>
    <body>
        <form action="/handlers/calculate_rate.php" method="post" name="form1" class="form-calc">
            <h2>Информация о водителе</h2>
            <hr>
            <div class="field">
                <label for="name">Полное имя :</label><br>
                <input type="text" name="name" placeholder="Введите имя" required/>
            </div>
            <div class="field">
<!--                дата рождения (01.01.1910) до первого дня 18 лет с текущей даты-->
                <label for="birthday">Дата рождения :</label><br>
                <?php
                echo "<input type='date' name='birthday' min='1910-01-01' max='".date("Y-m-d" ,strtotime('-18 years'))."'required />'"
                ?>
            </div>
            <div class="field">
<!--                права с (01.01.1920) до сегодняшнего дня-->
                <label for="prava">Дата получение прав: </label><br>
                <?php
                echo "<input type='date' name='prava' min='1920-01-01' max='".date("Y-m-d")."'required />'"
                ?>
            </div>
            <h2>Информация об авто</h2>
            <hr>
            <div class="field">
                <label for="category">Категория :</label><br>
                <select name="category">
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            </div>
            <div class="field">
                <label for="car_name">Транспортное средство :</label><br>
                <input type="text" name="car_name" placeholder="Наименование авто" required/>
            </div>
            <div class="field">
                <label for="car_birthday">Год выпуска :</label><br>
                <select name="car_birthday">
                    <script>
                        var myDate = new Date();
                        var year = myDate.getFullYear();

                        for (var i = 1930; i < year + 1; i++){
                            document.write('<option value="'+i+'">'+i+'</option>')
                        }
                    </script>
                </select>
            </div>
            <div class="field">
                <label for="hp">Л.с. :</label><br>
                <input type="number" min="30" max="999" name="hp"  required/>
            </div>
            <h2>План страхования</h2>
            <hr>
            <div class="field">
                <label for="insurance_type">Тип страхования :</label><br>
                <input type="radio" name="insurance_type" value="1" required>Открытая застраховка<br>
                <input type="radio" name="insurance_type" value="0">Закрытая застраховка<br>
                <br>
            </div>
            <div class="field">
                <label for="city">Территория преимущественного использования ТС :</label><br>
                <select name="city">
                    <option value="Москва">Москва</option>
                    <option value="Московская область">Московская область</option>
                </select>
            </div>
            <div class="field">
                <label for="date_rate">Период действия страхового полиса :</label><br>
                <select name="date_rate">
                    <option value="min">От 1 месяца до 3 месяцев</option>
                    <option value="average">От 3 месяцев до 7 месяцев</option>
                    <option value="max">От 7 месяцев и более</option>
                </select>
            </div>
            <div class="field">
                <hr>
                <input type="submit" value="Рассчитать" />
                <input type="reset">
            </div>
        </form>
    </body>
</html>
