jQuery(document).ready(function($) {

    function printCustomers(customers) {
        let html = "";
        for (let i = 0; i < customers.length; i++) {
            let d = new Date(`${customers[i].created_at}`);
            let date = d.toLocaleString("en-US", {timeZone:'America/New_York'});
            html += `
            <tr>
                <td>${i + 1}</td>
                <td>${customers[i].name}</td>
                <td>${customers[i].pin}</td>
                <td>${customers[i].puk}</td>
                <td>${customers[i].e_invoicing_login}</td>
                <td>${customers[i].e_invoicing_password}</td>
                <td>${customers[i].taxservise_login}</td>
                <td>${customers[i].taxservise_password}</td>
                <td>${customers[i].avc}</td>
                <td>${date}</td>
                <td>
                    <button><a href="http://accountant.loc/view/customers/edit.php?customer_id=${customers[i].id}""><img class="edit-file-name" 
                    src="http://accountant.loc/server/assets/images/edit.svg" alt=""></a></button>
                    <button><img data-id="${customers[i].id}" class="trash-file-name" src="http://accountant.loc/server/assets/images/trash.svg" alt=""></button>
                </td>
            </tr>
                `;
        }

        $('#all_customers').html(html);


        $(".trash-file-name").on("click",  function() {
            let id = $(this).data("id");
            $.ajax({
                url: "http://accountant.loc/server/web.php",
                method: "get",
                data: {action: "del_customer", id},
                success: function (e) {
                    alert("Customer deleted")
                    location.reload();
                }
            });
        })




    }

    $.ajax({
        url: "http://accountant.loc/server/web.php",
        method: "get",
        data: {action: "getCustomers",},
        success: function (response) {
            response = JSON.parse(response)
            console.log(response);
            printCustomers(response)
        }
    });

    $('#search_name').on("click", function(){
        let name = $('#search_inp').val();
        $.ajax({
            url:"http://accountant.loc/server/web.php",
            method:"get",
            data:{action:"Search", name },
            success: function (response) {
                response = JSON.parse(response)
                console.log(response);
                printCustomers(response)
            }
        });
    })

    $.ajax(
        {
            url: "http://accountant.loc/server/web.php",
            method: "get",
            data: {action: "edit_customer", customer_id:$('#customer_id').text()},
            success: function (response) {
                response = JSON.parse(response)
                console.log(response);
                $("#name").val(response[0].name);
                $("#pin").val(response[0].pin);
                $("#puk").val(response[0].puk);
                $("#e_invoicing_login").val(response[0].e_invoicing_login);
                $("#e_invoicing_password").val(response[0].e_invoicing_password);
                $("#taxservise_login").val(response[0].taxservise_login);
                $("#taxservise_password").val(response[0].taxservise_password);
                $("#avc").val(response[0].avc)
            }
        });











})