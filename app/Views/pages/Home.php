<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
    <title>Home</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="accueil">
        <div class="bg-color"></div>
        <div class="text text-center">
            <h1>Aeroclub</h1>
            <p>Fondé le 1er janvier 1945 alors appelé Aéro-Club de l'Alloeu, c'est en 1947 sous la Présidence d'Ernest CASSIN qu'il prit le nom d'Aéro-Club de la Lys et de l'Artois.<br>L’Aéroclub est une association sous statut de la Loi de 1901 qui comporte 116 membres, 7 instructeurs, 6 avions, une secrétaire et un bureau présidé par monsieur André Jonghmans. Il est agréé Jeunesse et Sport et Membre de la FFA (Fédération Française Aéronautique).</p>
            <p><img src="/css/img/arrow.svg" alt=""></p>
        </div>
    </section>
    <main class="container">
        <section class="forfaits">
            <div class="card">
                <div class="bg-color"></div>
                <img src="/css/img/img1.jpg" alt="">
                <div class="text">
                    <h2>Forfait 1</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit illum reiciendis explicabo.</p>
                    <div class="double-btn">
                        <button class="btn btn-primary">Information</button>
                        <button class="btn btn-danger">Afficher</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-color"></div>
                <img src="/css/img/img2.jpg" alt="">
                <div class="text">
                    <h2>Forfait 2</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit illum reiciendis explicabo.</p>
                    <div class="double-btn">
                        <button class="btn btn-primary">Information</button>
                        <button class="btn btn-danger">Afficher</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-color"></div>
                <img src="/css/img/img3.jpg" alt="">
                <div class="text">
                    <h2>Forfait 3</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit illum reiciendis explicabo.</p>
                    <div class="double-btn">
                        <button class="btn btn-primary">Information</button>
                        <button class="btn btn-danger">Afficher</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?= $this->endSection() ?>