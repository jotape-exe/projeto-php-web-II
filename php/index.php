<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="navbar">
        <img src="/img/Brasão-UNCISAL-transparente.png" alt="" id="uncisal-logo">
        <h3>AGENDA UNCISAL - 2023</h3>
    </header>
    <div class="flex-container">
        <div class="left-menu">
            <div class="flex-item fg-1 fs-1" id="events-title">EVENTOS SALVOS</div>
                <!--
                Adicionar icone de "Saved" apos a div events-title
                -->
            <div class="flex-item fg-1 fs-1">Evento 1</div>
            <div class="flex-item fg-1 fs-1">Evento 2</div>
            <div class="flex-item fg-1 fs-1">Evento 3</div>
            <div class="flex-item fg-1 fs-1">Evento 4</div>
            <div class="flex-item fg-1 fs-1">Evento 5</div>
            <div class="flex-item fg-1 fs-1">Evento 6</div>
            <div class="flex-item fg-1 fs-1">Evento 7</div>
            <div class="flex-item fg-1 fs-1">Evento 8</div>
            <div class="flex-item fg-1 fs-1">Evento 9</div>
            <div class="flex-item fg-1 fs-1">Evento 10</div>
        </div>

            <form action="#" method="post" class="forms">
                <div id="form-title">NOVO EVENTO</div>
                <!--
                Adicionar icone de "+"(PLUS) apos a div form-title
                <img src="/img/plus-icon.png" alt="" id="uncisal-logo">
                -->
                <div class="item-form">
                    <label for="text">Titulo do Evento</label>
                    <input type="text" class="title-input" placeholder="Ex: Estudar Docker">
                </div>

                <div class="item-form">
                    <label for="data">Data do evento</label>
                    <input class="date-input" type="date">
                </div>

                <div class="item-form">
                    <label for="textarea">Descrição do evento</label>
                    <textarea class="textarea-desc" style="resize: none" name="textarea" id="" cols="30" rows="10" placeholder="Ex: Instalar Docker na VM Debian 11"></textarea>
                </div>

                <div class="item-form row around">
                    <!--Input btn to Button-->
                    <input type="button" value="SALVAR" class="form-btn" id="save-btn">
                    <input type="button" value="CANCELAR" class="form-btn" id="cancel-btn">
                </div>



            </form>
            
    </div>

    <footer class="baseboard">
        <h3 >Developed by "NOME"</h3>
    </footer>
</body>
</html>