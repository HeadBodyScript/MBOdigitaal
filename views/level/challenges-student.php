<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require __DOCUMENTROOT__ . '/views/templates/head.php' ?>
</head>

<body>
    <?php require __DOCUMENTROOT__ . '/views/templates/' . $UserRole .'menu.php' ?>

    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">
        <h2 class="text-2xl font-bold dark:text-black">Levels - Student</h2>
        <!-- <p class="my-4 font-bold text-gray-700">Hieronder staat het overzicht van die te maken hebben met het
            ontwikkelen van de keuzedelen binnen het systeem van mbogodigital.nl</p> -->

        <div class="w-full">
            <div class="flex border-b border-gray-300">
                <!-- <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tl-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab1')">Realiseert Software</button> -->
                    <?php
                    $i = 1;
                    foreach ($Electives as $Elective) {
                        ?>
                        
                            <button
                            class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200"
                            onclick="openTab(event, 'tab<?php echo $i;?>')"><?php echo $Elective["subject"]; ?></button>
                        <?php
                                $i++;
                    }   
                    ?>
            </div>
            <div id="tab0" class="tabcontent p-4">
                <?php require 'challenges-tab0.inc.php' ?>
            </div>
            <div id="tab1" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab1.inc.php' ?>
            </div>
            <div id="tab2" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab2.inc.php' ?>
            </div>
            <div id="tab3" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab3.inc.php' ?>
            </div>
            <div id="tab4" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab4.inc.php' ?>
            </div>
            <div id="tab5" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab5.inc.php' ?>
            </div>
            <div id="tab6" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab6.inc.php' ?>
            </div>
            <div id="tab7" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab7.inc.php' ?>
            </div>
            <div id="tab8" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab8.inc.php' ?>
            </div>
            <div id="tab9" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab9.inc.php' ?>
            </div>
        </div>

        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].classList.add("hidden");
                }
                tablinks = document.getElementsByTagName("button");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active:bg-gray-200");
                }
                document.getElementById(tabName).classList.remove("hidden");
                evt.currentTarget.classList.add("active:bg-gray-200");
            }
        </script>



        <?php require __DOCUMENTROOT__ . '/views/templates/footer.php' ?>

    </div>


</body>

</html>