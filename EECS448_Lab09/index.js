let imageLinks = {
    1: "jordan1.jpeg",
    2: "jordan4.jpeg",
    3: "jordan12.jpeg"
}

let imageNames = {
    1: "Air Jordan 1 - $400",
    2: "Air Jordan 4 - $600",
    4: "Air Jordan 12 - $200"
}

let currentImg = 1;

function laodExercise(exercise) {
    let exercises = {
        1: "multiplication",
        2: "quiz",
        3: "store"
    }
    for(let i=1; i<4; i++)
    {
        if(exercise==3)
        {
            document.getElementById("imageDiv").style.display="block";
            document.getElementById("POS").style.display="block";
        }
        if(exercise == i)
        {
            document.getElementById(exercises[i]).style.display="block";
        }
        else
        {
            document.getElementById(exercises[i]).style.display="none";
        }
    }
    removeQuiz();
    removeReceipt();
}

function clearForm()
{
    document.getElementById("quizForm").reset();
    document.getElementById("orderForm").reset();
}

function removeQuiz()
{
    try {
        document.getElementById("quizResults").remove();
    }
    catch(error) {
        return;
    }
}

function removeReceipt() {
    try {
        document.getElementById("receipt").remove();
    }
    catch(error) {
        return;
    }
}

function next() {
    imageDiv = document.getElementById("imgDiv");
    let title = imageDiv.children[0];
    let source = imageDiv.children[2];
    if(currentImg == 3)
    {
        currentImg = 1;
    }
    else {
        currentImg++;
    }
    title.innerHTML = imageNames[currentImg];
    source.src = "./assets/" + imageLinks[currentImg];
}

function previous() {
    imageDiv = document.getElementById("imgDiv");
    let title = imageDiv.children[0];
    let source = imageDiv.children[2];
    if(currentImg == 1)
    {
        currentImg = 3;
    }
    else {
        currentImg--;
    }
    title.innerHTML = imageNames[currentImg];
    source.src = "./assets/" + imageLinks[currentImg];
}

function checkForm() {
    inputs = document.getElementById("orderForm").getElementsByTagName("input");

    for(let i=0; i<7; i++)
    {
        if(inputs[i].value == "") {
            console.log[i];
            alert("Cannot have empty input for " + inputs[i].name + "!");
            return false;
        }

        else if((i>1 && i<5) && !parseInt(inputs[i].value)) {
            alert("Must enter a positive integer for " + inputs[i].name + "!");
            return false;
        }
    }

    username = inputs[0].value;
    let regexUsername = /[a-zA-Z0-9]*@[a-zA-Z]*\.[a-z]{1,}/;
    if(!regexUsername.test(username)) {
        alert("Username must be of the form name@domain.com!");
        return false;
    }

    sevenDay = inputs[5].checked;
    threeDay = inputs[6].checked;
    overnight = inputs[7].checked;

    if(!(sevenDay || threeDay || overnight)) {
        alert("Must pick shipping option!");
        return false;
    }
    return false;
}