const btnStart = document.getElementById("btn-start");
const questionNumber = document.getElementById("question-number").alt;
const btnsQuiz = document.querySelectorAll("btn-quiz");
const flagImg = document.getElementById("question-flag");
const pts = document.getElementById("pts");
const quizResp = document.getElementById("quiz-resp");


btnsQuiz.forEach((btn) =>{
    btn.addEventListener("click",() => {
        if (btn.value == questionNumber){
            console.log(questionNumber )
            return quizResp.innerHTML = 'This is the correct answer';
         
         }
    })

})