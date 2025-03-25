<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #d3d3d3;
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }

        header {
            background-color: black;
            color: white;
            display: flex;
            align-items: center;
            padding: 15px 5%;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            height: 30px;
            width: 34px;
            height: auto;
            display: flex;
            border-radius: 10px;
            color: red;
            font-size: clamp(1.5rem, 3vw, 2rem);
            margin-right: auto;
        }

        nav {
            display: flex;
            gap: clamp(10px, 3vw, 30px);
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff0000;
        }

        .produtos {
            display: flex;
            justify-content: center;
            padding: 20px 5%;
            max-width: 1400px;
            margin: 0 auto;
            gap: 20px;
        }

        .produto {
            border: 2px solid black;
            padding: 20px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            width: 48%;
        }

        .produto:hover {
            transform: translateY(-5px);
        }

        .produto h3 {
            margin-bottom: 15px;
            font-size: clamp(1.1rem, 2vw, 1.3rem);
        }

        /* Menu hambúrguer */
        .menu-icon {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 6px;
            padding: 10px;
        }

        .menu-icon span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: white;
            transition: 0.3s;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: row;
                justify-content: space-between;
                padding: 15px 5%;
            }

            .menu-icon {
                display: flex;
                z-index: 101;
            }

            nav {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 70%;
                max-width: 300px;
                background-color: black;
                flex-direction: column;
                padding: 80px 20px;
                transition: 0.3s;
            }

            nav.active {
                right: 0;
            }

            .menu-icon.active span:nth-child(1) {
                transform: rotate(45deg) translate(8px, 8px);
            }

            .menu-icon.active span:nth-child(2) {
                opacity: 0;
            }

            .menu-icon.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -7px);
            }

            .produtos {
                flex-direction: column;
                padding: 15px;
            }

            .produto {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .produtos {
                gap: 15px;
            }

            .produto {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
<form action="/" method="POST">    
    <header>
        <div class="logo">
            <h5>BEM VINDO</h5>
        </div>
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
            <a href="#">.</a>
            <a href="#">.</a>
            <a href="#">.</a>
        </nav>
        <div class="profile-icon"></div>
    </header>

    <main>
        <div class="produtos">
            <div class="produto" style="min-height: 600px;">
                <h3>Cadeira de Corda</h3>
                <img src="corda-verde.jpeg" height="" width="" alt="">
            </div>
            <div class="produto" style="min-height: 600px;">
                <h3>Cadeira Junco</h3>
                <img src="junco.jpeg" height="" width="" alt="">
            </div>
        </div>
    </main>

    <script>
        const menuIcon = document.querySelector('.menu-icon');
        const nav = document.querySelector('nav');

        menuIcon.addEventListener('click', () => {
            menuIcon.classList.toggle('active');
            nav.classList.toggle('active');
        });
    </script>
</body>

<footer style="background-color: black; color: white; padding: 20px 5%; margin-top: auto;">
    <div style="display: flex; justify-content: space-between; max-width: 1200px; margin: 0 auto;">
        <div>
            <h4 style="color: red; margin-bottom: 10px;">Contato</h4>
            <p>Telefone: (18) 99142-5293</p>
            <p>Telefone: (18) 99107-0040</p>
        </div>
        <div>
            <h4 style="color: red; margin-bottom: 10px;"></h4>
            <p><a href="#" style="color: white; text-decoration: none;"></a></p>
            <p><a href="#" style="color: white; text-decoration: none;"></a></p>
        </div>
        <div>
            <h4 style="color: red; margin-bottom: 10px;"></h4>
            <p></p>
            <p></p>
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #333;">
        <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
    </div>
</footer>
</form>
</html>