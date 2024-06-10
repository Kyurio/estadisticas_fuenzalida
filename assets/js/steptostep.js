let currentStep = 0;
const steps = document.querySelectorAll('.step');
const progressBar = document.getElementById('progress-bar');
const stepIndicators = document.querySelectorAll('.step-indicator');

function showStep(step) {
    steps.forEach((element, index) => {
        element.classList.toggle('active', index === step);
    });
    updateProgressBar(step);
}

function updateProgressBar(step) {
    const progress = (step / (steps.length - 1)) * 100;
    progressBar.style.width = progress + '%';
    stepIndicators.forEach((indicator, index) => {
        if (index <= step) {
            indicator.classList.remove('btn-secondary');
            indicator.classList.add('btn-primary');
        } else {
            indicator.classList.remove('btn-primary');
            indicator.classList.add('btn-secondary');
        }
    });
}

function nextStep() {
    const currentForm = steps[currentStep].querySelectorAll('input, select');
    for (let i = 0; i < currentForm.length; i++) {
        if (!currentForm[i].checkValidity()) {
            currentForm[i].reportValidity();
            return;
        }
    }
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
}

document.getElementById('form-step').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Formulario enviado');
});

showStep(currentStep);