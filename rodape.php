<footer class="page-footer #212121 grey darken-4">
    <div class="container">
        <div class="row">
            <div class="col  s12">
                <p class="center">
                    CENTRO UNIVERSITÁRIO LUTERANO DE PALMAS<br>
                    Avenida Teotônio Segurado 1501 Sul Palmas - TO CEP 77.019-900 Caixa Postal nº 85<br>
                    Fone: (63) 3219 8000<br>
                </p>
            </div>
        </div>
    </div>
</footer>

<!--Materialize JS-->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script>
    $(function() {
        $('textarea').froalaEditor()
    });
</script>

<script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
        Materialize.updateTextFields();
        $('select').material_select();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#previewDiv :input").attr("disabled", true);
    });
</script>
<!--Data-->
<script>
    $(document).ready(function(){
        $('.datepicker').pickadate({
            monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
            weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            today: 'Hoje',
            clear: 'Limpar',
            close: 'Pronto',
            labelMonthNext: 'Próximo mês',
            labelMonthPrev: 'Mês anterior',
            labelMonthSelect: 'Selecione um mês',
            labelYearSelect: 'Selecione um ano',
            selectMonths: true,
            selectYears: 15
        });
    });
</script>
</body>
</html>