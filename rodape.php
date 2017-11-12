<!--Materialize JS-->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.js"></script>
<script src="js/quill.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        modules: {
            toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block', 'image'],
                [{ list: 'ordered' }, { list: 'bullet' }]
            ]
        },
        placeholder: 'Digite seu documento aqui',
        theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Populate hidden form on submit
        var about = document.querySelector('input[name=about]');
        about.value = JSON.stringify(quill.getContents());

        console.log("Submitted", $(form).serialize(), $(form).serializeArray());

        // No back end to actually submit to!
        alert('Open the console to see the submit data!')
        return false;
    };

</script>
<script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
        Materialize.updateTextFields();
        $('select').material_select();
    });
</script>
</body>
</html>