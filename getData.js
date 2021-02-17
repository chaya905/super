
$(document).ready(function () {
    //טעינה ראשונה של הפריטיים
    getMilk();
    getFruitVag();
    getSweets();
    function getMilk() {
        // get milk items
        $.ajax({

            url: "View_ajax.php",
            data: { category_name: "Milk" },
            type: "POST",
            cache: false,
            success: function (data) {
                $('#milk').html(data);
            }
        });
    }

    function getFruitVag() {
        // get fruits and vegetables items
        $.ajax({
            url: "View_ajax.php",
            data: { category_name: "FruitsVegetables" },
            type: "POST",
            cache: false,
            success: function (data) {
                $('#fruitVag').html(data);
            }
        });
    }

    function getSweets() {
        // get sweets items
        $.ajax({
            url: "View_ajax.php",
            data: { category_name: "sweets" },
            type: "POST",
            cache: false,
            success: function (data) {
                $('#sweets').html(data);
            }
        });
    }

    // get categories for select options
    $.ajax({
        url: "view_selectCategory.php",
        type: "POST",
        cache: false,
        success: function (data) {
            $('#selectCategory').append(data);
        }
    });

    $(document).ready(function () {
        $("#success").hide();
        $('#butsave').on('click', function () {
            var itemName = $('#itemName').val();
            var category_id = $('#selectCategory').val();
            // alert(category_id)  ;     
            if (itemName != "" && category_id != "") {
                $.ajax({
                    url: "save.php",
                    type: "POST",
                    data: {

                        itemName: itemName,
                        category_id: category_id
                    },
                    cache: false,
                    success: function (dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            alert('Data added successfully !');
                            $("#butsave").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            if (category_id == 1)
                                getMilk();
                            else if (category_id == 2)
                                getFruitVag();
                            else
                                getSweets();


                        }
                        else if (dataResult.statusCode == 201) {
                            alert("Error occured !");
                        }

                    }
                });
            }
            else {
                alert('Please fill all the field !');
            }

        });
    });
});


