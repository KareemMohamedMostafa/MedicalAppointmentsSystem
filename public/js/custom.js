function resetForm(form) { document.getElementById(form).reset(); }

function viewPatientModal(id) {
    const data = isNaN(id) ? parseInt(id) : id;
    $.ajax({
        type: "get",
        url: 'http://localhost:8000/viewpatient/' + data,
        success: function (response) {
            $('#view-gender').html(response.formatedgender);
            $('#view-birthdate').html(response.formatedbirthdate);
            $('#view-phone').html(response.formatedphone);
            $('#view-created_at').html(response.formatedcreated_at);
            $('#view-updated_at').html(response.formatedupdated_at);
            $('#view-doctorid').html(response.doctorid);
            $('#view-fullname').html(response.fullname);
            $('#view-patientimage').html(response.patientimage);
            $('#view-email').html(response.email);
            $('#view-address').html(response.address);
            $('#view-status').html(response.status);
            $('#view-username').html(response.username);
            $('#view-usermodifiedname').html(response.usermodifiedname);
            $('#view-doctorfullname').html(response.doctorfullname);
            $('#view-height').html(response.height);
            $('#view-weight').html(response.weight);
            $('#view-bmi').html(response.bmi);
            $("#view-patientimage").attr("src", response.image);
        }
    })
}

function editPatientModal(id) {
    const data = isNaN(id) ? parseInt(id) : id;
    $.ajax({
        type: "get",
        url: 'http://localhost:8000/viewpatient/' + data,
        success: function (response) {
            resetForm('patientForm');
            $('input[name=id]').val(response.id);
            $('input[name=fullname]').val(response.fullname);
            $('input[name=birthdate]').val(response.birthdate);
            $('input[name=height]').val(response.height);
            $('input[name=weight]').val(response.weight);
            $('input[name=bmi]').val(response.bmi);
            $('input[name=email]').val(response.email);
            $('input[name=phone]').val(response.phone);
            $("#address").text(response.address)
            $("#doctorid").val(response.doctorid).change();
            $("#gender").val(response.gender).change();
        }
    })
}