<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body onkeypress="return checkMyKey(event);">
<div id="formulario" class="fundoazul">
        <div class="formulario">
                <h2 class="flex-jc black pb-1">Calculadora</h2>
                <div id="result1">
                        <input type="text" class="input" id="resultado" maxlength="20" value="0" onfocus="this.selectionStart = this.selectionEnd = this.value.length;"  
                        autofocus="true"/>
                </div>
                <div class="flex-jc black m-05">
                        <button id="button" type="button" class="button1 m-05" onclick="insert('7')">7</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('8')">8</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('9')">9</button>
                        <button id="button" type="button" class="button2 m-05" onclick="insert('+')">+</button>
                        <button id="button" type="button" class="button3 m-05" onclick="insert('(')">(</button>
                </div>
                <div class="flex-jc black m-05">
                        <button id="button" type="button" class="button1 m-05" onclick="insert('4')">4</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('5')">5</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('6')">6</button>
                        <button id="button" type="button" class="button2 m-05" onclick="insert('-')">-</button>
                        <button id="button" type="button" class="button3 m-05" onclick="insert(')')">)</button>
                </div>
                <div class="flex-jc black m-05">
                        <button id="button" type="button" class="button1 m-05" onclick="insert('1')">1</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('2')">2</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('3')">3</button>
                        <button id="button" type="button" class="button2 m-05" onclick="insert('*')">x</button>
                        <button id="button" type="button" class="button3 m-05" onclick="back()">del</button>
                </div>
                <div class="flex-jc black m-05">
                        <button id="button" type="button" class="button1 m-05" onclick="insert('0')">0</button>
                        <button id="button" type="button" class="button1 m-05" onclick="insert('.')">.</button>
                        <button id="textbox" type="submit" class="button1 m-05" onclick="calcular()">=</button>
                        <button id="button" type="button" class="button2 m-05" onclick="insert('/')">/</button>
                        <button id="button" type="button" class="button3 m-05" onclick="clean('0')">CE</button>
                </div>
        </div>
</div>
</body>
</html>
<script>
        var 
                resultado = document.getElementById('resultado');

        function insert(num){
                resultado.value = resultado.value + num;
                resultado.focus();
        }

        function clean(){
                resultado.value = "0";
                resultado.focus();
        }

        function back(){
                resultado.value = resultado.value.substring(0, resultado.value.length -1);
                resultado.focus();
        }

        function checkMyKey(e) {
        var keyCode;
                //  Browsers de verdade
                if(e.which){
                keyCode = e.which;
                }
                // Internet Explorer
                else if(window.event){
                keyCode = e.keyCode;
                }
                if (keyCode == 13) {
                document.getElementById("textbox").click(); 
                }
        }

        function calcular(){
                if(resultado.value){
                        resultado.value = eval(resultado.value);
                }else{
                        resultado.value = "0";
                }
                resultado.focus();
        }
</script>