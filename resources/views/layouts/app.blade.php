<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield("title")</title>
    <!-- SimpleLightbox plugin CSS-->
    <link href="{{asset("bootstrap-5.0.2/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link href="{{asset("css/styles.css")}}" rel="stylesheet" />
</head>

<body id="page-top">

 <!-- Le contenu -->
 @yield("content")

 <!-- Footer-->
 <footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Max Corporation</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="bootstrap-5.0.2/js/bootstrap.min.js"></script>

<!-- Core theme JS-->
<script src="{{asset("js/sidebar.js")}}"></script>
<script src="{{asset("js/scripts.js")}}"></script>
<script src="{{asset("js/jquery-3.6.3.js")}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').dataTable();

    });
</script>
</body>

</html>