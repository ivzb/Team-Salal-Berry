<?php
include 'functions.php';
$title = "Welcome to GreenUni ..";
$description = "";
$keywords = "";

my_header($title, $description, $keywords);
?>
<section>
    <div class="container">
        <div class="row long">
            <div class="col-md-6">
                <h2>Кандидатстване</h2>
                <p class="indent">
                    Необходими условия за кандидатстване в нашия университет.
                </p>
            </div>

            <div class="col-md-6">
                <img src="images/apply.jpg" class="right" />
            </div>
        </div>

        <div class="row apply">
            <div class="col-md-4">
				<h2>За напреднали</h2>
				<p>
                    Ако сте напреднали в озеленяването на участъци може да се явите на изпит без да минавате подготвително ниво. За да се явите на изпит моля направете го от <a href="contacts.php">тук</a>.
                </p>
				<p>
					<img src="images/advanced.jpg" />
				</p>
				<p>
                    <a class="btn btn-default" href="#" role="button">Виж повече &raquo;</a>
                </p>
			</div>
            <div class="col-md-4">
                <h2>Завършен БЕЗПЛАТЕН курс по озеленяване НИВО #0</h2>
                <p>
                    Ако все още не сте записали БЕЗПЛАТНИЯТ ни курс ниво #0 побързайте да го направите от <a href="contacts.php">тук</a>.
                </p>
                <p>
                    <img src="images/greening-course.jpg" />
                </p>
                <p>
                    <a class="btn btn-default" href="#" role="button">Виж повече &raquo;</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>Приемен изпит</h2>
                <p>
                    Изпитът се провеждат в случайни офиси на нищо неподозиращи високо поставени в йерархията хора. Разпределението по офиси е строго секретно - постава се в facebook станицата ни  ден преди провеждане на изпита.
                    Изпитните работи са анонимни. Кандидат-студента си попълва данните отново във facebook страцита ни. Така се гарантира, че проверяването на изпитните работи ще бъде обективно. При доказан опит за измама или нарушаване на анонимността на конкурса, работата на кандидата се анулира и участието му в конкурса се прекратява.
                </p>
                <p>
                    <img src="images/grass-laptop.jpg" />
                </p>
                <p>
                    <a class="btn btn-default" href="#" role="button">Виж повече &raquo;</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2>Хардуерни компетенции</h2>
                <p>
                     Необходимо е да знаете как се разглобяват всякакъв вид офис техника, портативни устройства, домашна техника.
                </p>
                <p>
                    <img src="images/destinguish.jpg" />
                </p>
                <p>
                    <a class="btn btn-default" href="#" role="button">Виж повече &raquo;</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>Софтуерни компетенции</h2>
                <p>
                     Необходимо е да знаете как се преодоляват дребни и досадни софтуерни пречки.
                </p>
                <p>
                    <img src="images/hacker.jpg" />
                </p>
                <p>
                    <a class="btn btn-default" href="#" role="button">Виж повече &raquo;</a>
                </p>
            </div>
			<div class="col-md-4">
                <h2>Диплома за завършен SoftUni</h2>
                <p>
                    За да кандидатствате в нашия университет е необходимо да притежавате диплома <span class="important emphasized">ЛИЧНО</span> връчена от <span class="important emphasized">Светлин Наков</span>.
                </p>
                <p>
                    <img src="images/nakov-award.jpg" />
                </p>
                <p>
                    <a class="btn btn-default" href="#" role="button">Виж повече &raquo;</a>
                </p>
            </div>
        </div>

        <hr>
    </div>
</section>
<?php
my_foother();
?>      