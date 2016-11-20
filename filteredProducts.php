<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Online</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href="mangiabene.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php include_once("nav.php");?>
         </div>
    <div class = "row" id = "filterRow">
        <div class = "col-md-2">
         <label id = "filterCalories">Calories<i class="fa fa-caret-down" aria-hidden="true"></i></label><br>
                <div class = "filterCalories">
                    <input type="radio" name="calories" value="500" class = "calories" id = "500cal" onclick="ajaxFunction()"/><label for ="500cal">Under 500</label><br>
                    <input type="radio" name="calories" value="800" class = "calories" id = "800cal" onclick="ajaxFunction()"/><label for ="800cal">Under 800</label><br>
                    <input type="radio" name="calories" value="1000" class = "calories" id = "1000cal" onclick="ajaxFunction()"/><label for ="1000cal">Under 1000</label><br>
                    <input type="radio" name="calories" value="1500" class = "calories" id = "1500cal" onclick="ajaxFunction()" checked="checked"/><label for ="1500cal">Under 1500</label>
                </div>
        </div>
        <div class = "col-md-2">
            <label id = "filterSugar">Sugar<i class="fa fa-caret-down" aria-hidden="true"></i></label><br>
                <div class = "filterSugar">
                    <input type="radio" name="sugar" value="5" class = "sugar" id = "5sug" onclick="ajaxFunction()"/><label for ="5sug">Under 5g</label><br>
                    <input type="radio" name="sugar" value="10" class = "sugar" id = "10sug" onclick="ajaxFunction()"/><label for ="10sug">Under 10g</label><br>
                    <input type="radio" name="sugar" value="15" class = "sugar" id = "15sug" onclick="ajaxFunction()"/><label for ="15sug">Under 15g</label><br>
                    <input type="radio" name="sugar" value="20" class = "sugar" id = "20sug" onclick="ajaxFunction()" checked="checked"/><label for ="20sug">Under 20g</label>
                </div>
            </div>

        <div class = "col-md-2">
        <label id = "filterProtein">Protein<i class="fa fa-caret-down" aria-hidden="true"></i></label><br>
                <div class = "filterProtein">
                    <input type="radio" name="protein" value="5" class = "protein" id = "5pro" onclick="ajaxFunction()"/><label for ="5pro">Under 5g</label><br>
                    <input type="radio" name="protein" value="10" class = "protein" id = "10pro" onclick="ajaxFunction()"/><label for ="10pro">Under 10g</label><br>
                    <input type="radio" name="protein" value="15" class = "protein" id = "15pro" onclick="ajaxFunction()"/><label for ="15pro">Under 15g</label><br>
                    <input type="radio" name="protein" value="20" class = "protein" id = "20pro" onclick="ajaxFunction()" checked="checked"/><label for ="20pro">Under 20g</label>
                </div>
            </div>

        <div class = "col-md-2">
        <label id = "filterFat">Fat<i class="fa fa-caret-down" aria-hidden="true"></i></label><br>
            <div class = "filterFat">
                    <input type="radio" name="fat" value="5" class = "fat" id = "5fat" onclick="ajaxFunction()"/><label for ="5fat">Under 5g</label><br>
                    <input type="radio" name="fat" value="10" class = "fat" id = "10fat" onclick="ajaxFunction()"/><label for ="10fat">Under 10g</label><br>
                    <input type="radio" name="fat" value="15" class = "fat" id = "15fat" onclick="ajaxFunction()" checked="checked"/><label for ="15fat">Under 15g</label>
                </div>
                </div>
        <div class = "col-md-2">
        <label id = "filterCarbs">Carbs<i class="fa fa-caret-down" aria-hidden="true"></i></label><br>
                <div class = "filterCarbs">
                     <input type="radio" name="carbs" value="20" class = "carbs" id = "20car" onclick="ajaxFunction()"/><label for ="20car">Under 20g</label><br>
                     <input type="radio" name="carbs" value="30" class = "carbs" id = "30car" onclick="ajaxFunction()"/><label for ="30car">Under 30g</label><br>
                     <input type="radio" name="carbs" value="40" class = "carbs" id = "40car" onclick="ajaxFunction()"/><label for ="40car">Under 40g</label><br>
                     <input type="radio" name="carbs" value="50" class = "carbs" id = "50car" onclick="ajaxFunction()" checked="checked"/><label for ="50car">Under 50g</label>
                </div>
                </div>
          <div class = "col-md-2">      
        <label id = "filterPrice">Price<i class="fa fa-caret-down" aria-hidden="true"></i></label><br>
                <div class = "filterPrice">
                    <input type="radio" name="price" value="5" class = "price" id = "5dol" onclick="ajaxFunction()"/><label for ="5dol">Under $5</label><br>
                    <input type="radio" name="price" value="10" class = "price" id = "10dol" onclick="ajaxFunction()"/><label for ="10dol">Under $10</label><br>
                    <input type="radio" name="price" value="15" class = "price" id = "15dol" onclick="ajaxFunction()" checked="checked"/><label for ="15dol">Under $15</label>
                    </div>
                </div>

        </div>
        <div id = "productsDiv" class = "container">
        </div>

        <div>
            <?php include_once("footer.php");?>
         </div>

        <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="filter.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>
