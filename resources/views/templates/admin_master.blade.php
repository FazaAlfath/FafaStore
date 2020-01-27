<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/app.css">
    <title>@yield( 'tab-title' )</title>
</head>
<body>

    <div class="wrapper">
        <aside>
            <ul>
                <h3> DASHBOARD </h3>
                <div class="list-panel">
                    <a href="#">Customers Order</a>
                    <a href="/admin-account">Admin Account</a>
                    <a href="/template-edit">Template Edit</a>
                    <a href="" class="admin-logged">Admin <i class="fas fa-caret-up"></i>
                        <ul>
                            <li class="admin-logged"  >@yield('admin-logged')</li>
                        </ul>
                    </a>
                    <a href="/admin-logout">Logout</a>
                </div>
            </ul>

        </aside>

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>

    const wrapper = document.querySelectorAll('.wrapper');
    const aClicked = document.querySelectorAll('.wrapper .list-panel a');

    Array.from(wrapper).forEach(function(el) {
        el.addEventListener('click', function(obj){
            if( obj.target.tagName == "A" ){
                Array.from(aClicked).forEach(function(aclick){
                    aclick.classList.remove('a-action');
                });
                obj.target.classList.toggle('a-action');
                obj.target.style.color = "#eee";
                obj.target.style.textDecoration = "none";
            }
        });
    });

    const btnAdminLogged = document.querySelector('.wrapper .admin-logged');

    btnAdminLogged.addEventListener('click', function(e){
        e.preventDefault();
        this.querySelector('ul').classList.toggle('show-admin-logged');
        this.style.color = "#eee";
        this.style.textDecoration = "none";
        this.querySelector('i').classList.toggle('rotate-caret-i');
    });


    const td = document.querySelector('table tbody td');


    td.addEventListener('click', function(el){
        el.target.tagName = "input";
        // console.log(el);
    });

    const modalOrder = document.querySelector('#modal-order');
    const btnModalOrder = document.querySelector('a#edit');
    const btnCloseModal = document.querySelector('button.close-modal');

    btnModalOrder.addEventListener('click', function(){
        modalOrder.style.display = "flex";
    });

    btnCloseModal.addEventListener('click', function(e){
        e.preventDefault();
        modalOrder.style.display = "none";
    });

</script>
</body>
</html>