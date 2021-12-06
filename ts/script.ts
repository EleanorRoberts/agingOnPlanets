const age = document.querySelector<HTMLInputElement>('#age')
const planet = document.querySelector<HTMLSelectElement>('#planets')
const ageOutput = document.querySelector<HTMLDivElement>('#result')
const errorMessage = document.querySelector<HTMLDivElement>('#error')

const form = document.querySelector('form').addEventListener('submit', handleSubmit)


function handleSubmit(e): void {
    e.preventDefault()
    if (age.value !== '') {
        switch (planet.value) {
            case 'Mercury':
                errorMessage.style.display = 'none'
                ageOutput.innerText = formatResponse(calculateAge(mercury, age.valueAsNumber))
                break
            case 'Venus':
                errorMessage.style.display = 'none'
                ageOutput.innerText = formatResponse(calculateAge(venus, age.valueAsNumber))
                break
            case 'Mars':
                errorMessage.style.display = 'none'
                ageOutput.innerText = formatResponse(calculateAge(mars, age.valueAsNumber))
                break
            case 'Jupiter':
                errorMessage.style.display = 'none'
                ageOutput.innerText = formatResponse(calculateAge(jupiter, age.valueAsNumber))
                break
            case 'Saturn':
                errorMessage.style.display = 'none'
                ageOutput.innerText = formatResponse(calculateAge(saturn, age.valueAsNumber))
                break
        }
    } else {
        errorMessage.style.display = 'inherit'
        errorMessage.innerText = "No age entered!"
    }
}

interface Planet {
    name: string
    multiplier: number
}

const mercury = {
    name: 'Mercury',
    multiplier: 0.2408467
}

const venus = {
    name: 'Venus',
    multiplier: 0.61519726
}

const mars = {
    name: 'Mars',
    multiplier: 1.8808158
}

const jupiter = {
    name: 'Jupiter',
    multiplier: 11.862615
}

const saturn = {
    name: 'Saturn',
    multiplier: 29.447498
}


function calculateAge(planet: Planet, age: number): string {
    return (planet.multiplier * age).toFixed(2)
}

function formatResponse(response: string): string {
    return response + ' on ' + planet.value
}
