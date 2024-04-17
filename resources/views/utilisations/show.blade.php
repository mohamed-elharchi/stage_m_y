<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.zmm{
    width: 100%;
    height: 70px;
    font-size: 50px;

}
.zmmm{
    width: 100%;
    height: 500px;
}
</style>
<body>

<div class="zmm">
                                <p><strong>classe:</strong> {{ $utilisation->classe }}</p>

                            </div>
                            <div class="zmmm">
                                <img class="zmmm" src="{{ asset('imagess/' . $utilisation->image) }}" class="img-fluid" alt="Utilisation Image">
                            </div>

</body>
</html>



