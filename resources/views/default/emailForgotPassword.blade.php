<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;" >TAMAS</title>
    <meta charset="utf-8" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;" >
    <meta name="viewport" content="width=device-width, initial-scale=1" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;" ></script>
</head>
<body
    style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;text-align:center;margin-right:auto;margin-left:auto;">
<main>
    <div style="margin-top: 2em">
        <h2>Recuperação de Senha</h2>
    </div>
    <div style="margin-top: 2em; background-color: #489b95">
        <img src="https://assets-epione-trace.s3.sa-east-1.amazonaws.com/trace-email-body.png" width="230">
    </div>
    <div style="padding: 2em">
        <p>Olá <b>{!! $name !!}</b>, entre no link abaixo para recuperar senha!</p>
    </div>
    <div style="padding: 2em">
        <a href="{!! $link !!}" style="text-decoration:none;display:inline-block;margin-bottom:0;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;touch-action:manipulation;cursor:pointer;border-width:1px;border-style:solid;padding: 6px 12px;font-size:14px;line-height:1.42857143;border-radius:5em;color:#fff;background:#489b95;border-color:#2e6da4; width: 20em;" >Recuperar</a>
    </div>
</main>
<footer style="background-color: #e9e9e9; padding: 1em">
    <div>
        <span style="padding: 1em; font-weight: bold; font-size: 20px">Trace</span>
    </div>
</footer>
</body>
</html>
