document.addEventListener("DOMContentLoaded", function() {
    // Select the buttons and form container
    const showFormBtn = document.getElementById("showFormBtn");
    const hideFormBtn = document.getElementById("hideFormBtn");
    const formContainer = document.getElementById("formContainer");
    // const addSpBtn = document.querySelector(".add-sp-btn");

    // Add click event listener to the "Show Form" button
    showFormBtn.addEventListener("click", function() {
        // Clone the initial form
        const clonedForm = formContainer.firstElementChild.cloneNode(true);

        // Make the cloned form visible
        clonedForm.style.display = "block";

        // Append the cloned form to the form container
        formContainer.appendChild(clonedForm);

        // Show the "Hide Form" button
        hideFormBtn.style.display = "block";
        // addSpBtn.style.display = "block";
    });

    // Add click event listener to the "Hide Form" button
    hideFormBtn.addEventListener("click", function() {
        // Get all forms within the form container
        const forms = formContainer.getElementsByClassName("form-group");

        // Hide the last visible form
        for (let i = forms.length - 1; i >= 0; i--) {
            if (forms[i].style.display === "block") {
                forms[i].style.display = "none";
                break;
            }
        }

        // Check if all forms are hidden, then hide the "Hide Form" button
        const allFormsHidden = [...forms].every(form => form.style.display === "none");
        if (allFormsHidden) {
            hideFormBtn.style.display = "none";
        }
        // if (allFormsHidden) {
        //     addSpBtn.style.display = "none";
        // }
    });

    addSpBtn.addEventListener("click", function() {
        // Trigger the submit event for the last visible form
        formContainer.lastElementChild.querySelector('.add-sp-btn').click();
    });
});