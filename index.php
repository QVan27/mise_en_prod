<?php
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

    <form class="w-full">
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
          <textarea rows="10" class="
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
                ">
              </textarea>
        </div>
        <div class="flex justify-between w-full px-3">
          <button class="
                  shadow
                  bg-indigo-600
                  hover:bg-indigo-400
                  focus:shadow-outline focus:outline-none
                  text-white
                  font-bold
                  py-2
                  px-6
                  rounded
                " type="submit">
            Envoyer
          </button>
        </div>
      </div>
    </form>
  </div>

  <div class="max-w-screen-md mx-auto p-5">
    <p class="bg-gray-100 w-3/4 mx-4 my-2 p-2 rounded-lg">message 1:</p>
    <p class="bg-gray-300 w-3/4 mx-4 my-2 p-2 rounded-lg">le message ici</p>
  </div>
</main>
<?php
include('inc/footer.php');?>