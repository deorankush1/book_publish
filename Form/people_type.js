$(function(){

    $("#people_type").change(function(){

        var people = $(this).val();
        //console.log(people);

        switch(people)
        {
            case "Author" :
                    $("#display_form").load("http://localhost/Book_Industry/Form/f_author.php");
                    console.log("author");
                    break;
            case "Publisher" :
                    $("#display_form").load("http://localhost/Book_Industry/Form/f_publisher.php");
                    console.log("paperback");
                    break;
            case "Editor" :
                    $("#display_form").load("http://localhost/Book_Industry/Form/f_editor.php");
                    console.log("digital");
                    break;
            case "Illustrator" :
                    $("#display_form").load("http://localhost/Book_Industry/Form/f_illustrator.php");
                    console.log("audio");
                    break;
        }


    });
});
