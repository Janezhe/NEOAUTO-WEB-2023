<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cds.neoauto.pe/neoauto2/plugins/styes-form/form.css?20230516121747" rel="stylesheet" type="text/css">
    <link href="https://cds.neoauto.pe/neoauto2/css/new.css?20230516121747" rel="stylesheet" type="text/css">
    <link href="https://cds.neoauto.pe/neoauto2/css/reset.css?20230516121747" rel="stylesheet" type="text/css">
    <link href="https://cds.neoauto.pe/neoauto2/css/styles.css?20230516121747" rel="stylesheet" type="text/css">
    <link href="https://cds.neoauto.pe/neoauto2/css/fonts.css?20230516121747" rel="stylesheet" type="text/css" charset="utf-8">

    <link href="https://cds.neoauto.pe/neoauto2/css/footer-styles.css?20230516121747" rel="stylesheet" type="text/css" media="all">

    <link href="https://cds.neoauto.pe/neoauto2/css/neoauto.css?20230516121747" rel="stylesheet" type="text/css" charset="utf-8">
    <link href="https://cds.neoauto.pe/neoauto2/f/css/bjqs.css?20230516121747" rel="stylesheet" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://cds.neoauto.pe/neoauto2/css/temporal.css?20230516121747">
    <link rel="stylesheet" href="{{$style   ?? ""}}">
    <title>{{$title ?? ""}}</title>
</head>

<body style="min-width:466px">
    {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>