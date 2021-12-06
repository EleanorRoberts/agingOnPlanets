var age = document.querySelector('#age');
var planet = document.querySelector('#planets');
var ageOutput = document.querySelector('#result');
var errorMessage = document.querySelector('#error');
var form = document.querySelector('form').addEventListener('submit', handleSubmit);
function handleSubmit(e) {
    e.preventDefault();
    if (age.value !== '') {
        switch (planet.value) {
            case 'Mercury':
                errorMessage.style.display = 'none';
                ageOutput.innerText = formatResponse(calculateAge(mercury, age.valueAsNumber));
                break;
            case 'Venus':
                errorMessage.style.display = 'none';
                ageOutput.innerText = formatResponse(calculateAge(venus, age.valueAsNumber));
                break;
            case 'Mars':
                errorMessage.style.display = 'none';
                ageOutput.innerText = formatResponse(calculateAge(mars, age.valueAsNumber));
                break;
            case 'Jupiter':
                errorMessage.style.display = 'none';
                ageOutput.innerText = formatResponse(calculateAge(jupiter, age.valueAsNumber));
                break;
            case 'Saturn':
                errorMessage.style.display = 'none';
                ageOutput.innerText = formatResponse(calculateAge(saturn, age.valueAsNumber));
                break;
        }
    }
    else {
        errorMessage.style.display = 'inherit';
        errorMessage.innerText = "No age entered!";
    }
}
var mercury = {
    name: 'Mercury',
    multiplier: 0.2408467
};
var venus = {
    name: 'Venus',
    multiplier: 0.61519726
};
var mars = {
    name: 'Mars',
    multiplier: 1.8808158
};
var jupiter = {
    name: 'Jupiter',
    multiplier: 11.862615
};
var saturn = {
    name: 'Saturn',
    multiplier: 29.447498
};
function calculateAge(planet, age) {
    return (planet.multiplier * age).toFixed(2);
}
function formatResponse(response) {
    return response + ' on ' + planet.value;
}
