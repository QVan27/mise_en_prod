<?php
include('inc/function.php');
include('inc/pdo.php');
// Traitement PHP
$errors = array();
$success = false;

$sql = "SELECT * FROM `messages-mise-en-production-cours`";
$query = $pdo->prepare($sql);
$query->execute();
$messages = $query->fetchAll();

if(!empty($_POST['submitted'])) {
    $message = clean($_POST['message']);
    // Validation
    $errors = textValid($errors,$message,'message',5,2000);
    if(count($errors) == 0) {
        // insert avec protection des injections SQL
        $sql = "INSERT INTO `messages-mise-en-production-cours`  (`message-vlauer`)  VALUES (:message)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':message',$message,PDO::PARAM_STR);
        $query->execute();

        $success = true;
    }
}
include('inc/header.php');?>
<main>
  <div class="max-w-screen-md mx-auto p-5">
    <div class="text-center mb-16">
      <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
        message
      </p>
      <h3 class="
              text-3xl
              sm:text-4xl
              leading-normal
              font-extrabold
              tracking-tight
              text-gray-900
            ">
        Laisse un <span class="text-indigo-600">message</span>
      </h3>
    </div>

    <?php if($success) { ?>
            <p class="success">Merci pour votre message.</p>
        <?php } else  { ?>
    <form class="w-full" action="" method="post">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-700 text-xs
                  font-bold
                  mb-2
                " for="grid-password">
            Votre message
          </label>
          <textarea name="message" rows="10" class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-700
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-500
                "><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                <p class="error"><?php if(!empty($errors['message'])) {echo $errors['message'];} ?></p>
            
        </div>
        <div class="flex justify-between w-full px-3">
          <input class="
                  shadow
                  bg-indigo-600
                  hover:bg-indigo-400
                  focus:shadow-outline focus:outline-none
                  text-white
                  font-bold
                  py-2
                  px-6
                  rounded
                " type="submit" name="submitted">
            Envoyer
          </input>
        </div>
      </div>
    </form>
    <?php } ?>
  </div>

  <div class="max-w-screen-md mx-auto p-5">
   <?php foreach ($messages as $value){
      echo "<p>".$value['message-vlauer']."</p>";

} ?>

  </div>
</main>
<?php
include('inc/footer.php');?>