$(document).ready(function() {
var countZero = 0,
        countOne = 0,
        countTwo = 0;

  $('.btn-recheck').on('click', function(e) {
    
    e.preventDefault();
    var worker = $('.worker1');
    var workerLn = $('.worker1').length;
    var effectives = $('input[name="effectives"]');
    var trouble_ansver = $('input[name="trouble_ansver"]');


    trouble_ansver.val(workerLn);
    // get questions values
    var play_music = $('input[name="play_music"]').val(),
        greeting = $('input[name="greeting"]').val(),
        setdown = $('input[name="setdown"]').val(),
        candies = $('input[name="candies"]').val(),
        in_form = $('input[name="in_form"]').val(),
        business_card = $('input[name="business_card"]').val(),
        for_sale = $('input[name="for_sale"]').val();

    
    switcherQuestion(play_music);
    switcherQuestion(greeting);
    switcherQuestion(setdown);
    switcherQuestion(candies);
    switcherQuestion(in_form);
    switcherQuestion(business_card);
    switcherQuestion(for_sale);

    var efcr = getEffectivity(workerLn, workerLn - countTwo, countOne);
    trouble_ansver.val(countTwo)
    effectives.focus().val(efcr).blur();

    });

    function switcherQuestion(par) {
        switch(par) {
          case '0':
            countZero += 1;
            break;

          case '1':
            countOne += 1;
            break;

          case '2':
            countTwo += 1;
            break;
        }
    }

    /*function getEffectivity(totalQuest, totalAnswer, totalGood){
      var effectivityPercent = (totalQuest - totalAnswer) / 100;
      var effectivity = totalGood / effectivityPercent;
      return effectivity;
    }*/
    function getEffectivity(totalQuest, totalAnswer, totalGood){
        
        // percentage per question, depending on the amount
        var percentPerQuest =  100 / totalAnswer;

        // number of positive answers
        var effectivity = totalGood * percentPerQuest;

        // round to fixed
        return Math.round(effectivity);
    }
    

    
})