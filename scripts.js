
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("obituaryForm");

    form.addEventListener("submit", function(event) {

        event.preventDefault();


        let isValid = true;

        const name = document.getElementById("name").value.trim();
        if (name === "") {
            isValid = false;
            alert("Please enter the name.");
            return;
        }

        const dateOfBirth = document.getElementById("date_of_birth").value;
        if (dateOfBirth === "") {
            isValid = false;
            alert("Please select the date of birth.");
            return;
        }

        const dateOfDeath = document.getElementById("date_of_death").value;
        if (dateOfDeath === "") {
            isValid = false;
            alert("Please select the date of death.");
            return;
        }

        const content = document.getElementById("content").value.trim();
        if (content === "") {
            isValid = false;
            alert("Please enter the content.");
            return;
        }

        const author = document.getElementById("author").value.trim();
        if (author === "") {
            isValid = false;
            alert("Please enter the author.");
            return;
        }


        if (isValid) {
            this.submit();
        }
    });
});
