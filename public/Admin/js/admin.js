
const overlay = $(".overlay");

const process = $("#process").attr('data-name');
const processURL = `/Admin/process/${process}`;

$(document).ready(function() {

    



    $(document).on('submit', '.modalform', function(e) {
        e.preventDefault();

        overlay.removeClass('d-none');
        var form = this;
        var formData = new FormData(form);

    

        $.ajax({
            url: processURL,
            type: "POST",
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,

            success: (data) => {
                overlay.addClass('d-none');
                dataTable.draw(false);
                if(data.s == 1) {
                    Swal.fire('Success', data.m, 'success');
                } else {
                    Swal.fire('Warning', data.m, 'warning');
                    console.log(data.m);
                }
            },

            error: (error, xhr) => {
                overlay.addClass('d-none');
                Swal.fire('Error', 'Internal Error', 'error');
                console.error(error);
            }

        });
    });

    let editorInstance = null;

    $(document).on('click', '.edit', function(e) {
        e.preventDefault();

        const edit = $(this);

        switch (process) {
            case 'session':
            case 'faculty':
                // binding
                var id = edit.data('id');
                var name = edit.data('name');
                $('#ids').val(id);
                $('#edit_faculty').val(name);
                break;
            case 'department':
                (async () => {
                    try {
                        var id = edit.data('id');
                        var faculty_id = edit.data('faculty');
                        var name = edit.data('name');
                        
                        $('#ids').val(id);
                        $('#department').val(name);
                        
                        const faculties = await getEditFaculty(faculty_id);
                        $('#fac').html(faculties);
                    } catch (error) {
                        console.log('Error:', error);
                    }
                })();
                break;
            case 'blog':
            case 'event':
    
                $.each(edit.data(), function(key, value) {
                    var input = $("#" + key);
                    input.empty();
                
                    if (input.length) {
                        if ((key === 'blog_content' && input.is("textarea")) || (key === 'content' && input.is("textarea"))) {
                            // Decode any HTML entities to ensure proper formatting in CKEditor
                            var decodedValue = $("<div>").html(value).text();
                
                            // Destroy the existing CKEditor instance before creating a new one
                            if (editorInstance) {
                                editorInstance.destroy()
                                    .then(() => {
                                        editorInstance = null;
                                    })
                                    .catch(error => {
                                        console.error('Error destroying editor:', error);
                                    });
                            }
                
                            // Initialize the new CKEditor instance

                            if(key === 'content') {
                                ClassicEditor
                                .create(document.querySelector('#content'))
                                .then(editor => {
                                    editor.setData(decodedValue);
                                    editorInstance = editor;
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                            } else {

                                ClassicEditor
                                .create(document.querySelector('#blog_content'))
                                .then(editor => {
                                    editor.setData(decodedValue);
                                    editorInstance = editor;
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                            }

                        } else {
                            input.val(value);
                        }
                    }
                });
                break;
            case 'past': 
            case 'ebook':
            (async () => {
                try {
                    var faculty_id = edit.data('faculty_id');
                    var department_id = edit.data('department_id');
            
                    $.each(edit.data(), async function (key, value) {
                        var input = $("#" + key);
                        input.empty();
            
                        if (key === 'faculty_id') {
                            var faculties = await getFaculty(faculty_id);
                            $('#edit_faculties').html(faculties);
                        } else if (key === 'department_id') {
                            var departments = await getDepartmentByFacultyId(faculty_id, department_id);
                            $('#edit_departments').html(departments);
                        } else {
                            input.val(value);
                        }
                    });
                } catch (error) {
                    console.log('Error:', error);
                }
            })();
            
                
                
            default:
                break;
        }
        

    });



    $(document).on('click', '.view', function() {

        const view = $(this);
        $("#v_image").empty();
        var first_name = view.data('first_name');
        var last_name = view.data('last_name');
        var pid = view.data('pid');
        var email = view.data('email');
        var phone = view.data('phone');
        var dob = view.data('dob');
        var address = view.data('address');
        var image = view.data('image');
        var gender = view.data('gender');

        $("#v_first_name").text(first_name);
        $("#v_last_name").text(last_name);
        $("#v_pid").text(pid);
        $("#v_email").text(email);
        $("#v_phone").text(phone);
        $("#v_dob").text(dob);
        $("#v_address").text(address);
        $("#v_gender").text(gender);
        $("#note_id").text(view.data('note'));
        console.log((view.data('note')));
        if(process === 'appoint') {

        } else {

            var imgElement =  $('<img>');
            imgElement.attr({
                src: `/public/thumb/${image}`,
                width: 100,
                height: 100,
            });
    
            
            $('#v_image').append(imgElement);
        }


        $("#viewmodal").modal('show');
    });

    const dataTable = $("#dataTable").DataTable({
        "processing": true,
        "stateSave": true,
        "serverSide": true,
        "ajax": {
            "url" : processURL,
            'type': "POST",
            "data" : function (d) {
                d.order = [{column : d.order[0].column, 
                    dir: d.order[0].dir}];
                d.action = 'list';
                d.filterData = $("#dataTable").attr('data-filter');

            },

            error: function(xhr) {
                Swal.fire('Error', 'There was an error with your request pls check and try again', 'error');
                console.log(xhr.responseText);
            }
        },
        
        "columns": null,
        "order": [[0, 'desc']],
        "initComplete": function(setting, json) {
            if(json.columns) {
                this.api().columns().header().to$().each(function(columns, idx) {
                    $(column).text(json.columns[idx]);
                });
            }
        },
        "responsive": true,
        dom: "Bflrtip",
        select: {
            style: "os",
            selector: "td:nth-child(1)"
        },

        buttons: [
            "selectAll",
            'selectNone',
            {
                text: "Delete",
                className: "btn btn-danger",
                action: () => {
                    var selectedRows = dataTable.rows({selected: true}).data().toArray();
                    var ids = selectedRows.map(row =>row[0]);
                    var count = dataTable.rows({selected: true}).count();
                    if(count > 0) {
                        Setting('deleteAll', ids);
                    } else {
                        Alert(2, 'You did not select any item');
                    }
                }
            }
        ]
        
    });

    $(document).on('click', '.showActive', (e) => {
        e.preventDefault();
        $('.showingBy').text('Active')
        $("#dataTable").attr('data-filter', 'showActive');
        dataTable.ajax.reload();
    });

    $(document).on('click', '.showDeactive', (e) => {
        e.preventDefault();
        $('.showingBy').text('Inactive')
        $("#dataTable").attr('data-filter', 'showDeactive');
        dataTable.ajax.reload();
    });

    $(document).on('click', '.showCanceled', (e) => {
        e.preventDefault();
        $('.showingBy').text('Canceled')
        $("#dataTable").attr('data-filter', 'showCanceled');
        dataTable.ajax.reload();
    });

    $(document).on('click', '.showAll', (e) => {
        e.preventDefault();
        $("#dataTable").attr('data-filter', 'All');
        dataTable.ajax.reload();
    });

    $(document).on('click', '.activate', function(e) {
        e.preventDefault();

        var id = $(this).data('id');

        Setting('activate', id);
    });

    $(document).on('click', '.deactivate', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        Setting('deactivate', id);
    });

    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        Setting('delete', id);
    });

    $(document).on('click', '.activateAll', function(e) {
        e.preventDefault();
        Setting('activateAll');
    });

    $(document).on('click', '.deactivateAll', function(e) {
        e.preventDefault();
        Setting('deactivateAll');
    });

    $(document).on('click', '.deleteAll', function(e) {
        e.preventDefault();
        Setting('deleteAll');
    });

    $(document).on('change', '#get_faculty', async function() {
        try {
            var id = $(this).val();
    
            const departments = await getDepartmentByFacultyId(id);
            $("#get_department").html(departments);
        } catch (error) {
            console.log('Error:', error);
        }
    });

    $(document).on('change', '#get_faculty2', async function() {
        try {
            var id = $(this).val();
    
            const departments = await getDepartmentByFacultyId(id);
            $("#get_department2").html(departments);
        } catch (error) {
            console.log('Error:', error);
        }
    });

    $(document).on('change', '#edit_faculties', async function() {
        try {
            var id = $(this).val();
    
            const departments = await getDepartmentByFacultyId(id);
            $("#edit_departments").html(departments);
        } catch (error) {
            console.log('Error:', error);
        }
    });



    function Setting(type, id = '') {

        let title;
        let ids;
        if(type === 'activate') {
            title = 'Activate',
            count = 1;
            ids = id;
        } else if(type === 'deactivate') {
            title = 'Deactivate';
            count = 1;
            ids = id;
        } else if(type === 'delete') {
            title = 'Delete';
            count = 1;
            ids = id;
        } else if(type === 'activateAll') {
            title = 'Activate';
            var selectedRows = dataTable.rows({selected: true}).data().toArray();
            ids  = selectedRows.map(row => row[0]);
            count = dataTable.rows({selected: true}).count();
        }  else if(type === 'deactivateAll') {
            title = 'Deactivate ';
            var selectedRows = dataTable.rows({selected: true}).data().toArray();
            ids  = selectedRows.map(row => row[0]);
            count = dataTable.rows({selected: true}).count();
        }   else if(type === 'deleteAll') {
            title = 'Delete ';
            var selectedRows = dataTable.rows({selected: true}).data().toArray();
            ids  = selectedRows.map(row => row[0]);
            count = dataTable.rows({selected: true}).count();
        }
    
        if(count < 1) {
            Swal.fire('Error', 'You have not select any item for ' + title, 'error');
            return false;
        } else {
    
            Swal.fire({
                title: `Are you sure to ${title} total ${count} Item`,
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: "btn-warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "YES",
                cancelButtonText: "NO",
                closeOnCancel: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }).then((result) => {
                if(result.value) {
                    const process = $("#process").attr('data-name');
                    const processURL = `/Admin/process/${process}`;
                    $.ajax({
                        url: processURL,
                        type: "POST",
                        dataType: "json",
                        data: {
                            id : ids,
                            status: type,
                            action: "SettingStatus",
    
                        },
    
                        success: (data) => {
                            dataTable.draw(false);
                            if(data.s == 1) {
                                Alert(1, data.m);
                            } else {
                                Alert(2, data.m);
                            }
                        },
    
                        error: (xhr, error) => {
                            console.log(xhr.responseText);
                            Alert(0, 'Error Occur ' + error);
                        }
                    });
                }
            });
        }
    }
    

});

function getEditFaculty(id) 
{ 
    return new Promise((resolve, reject) => {

        $.ajax({
            url: processURL,
            type: 'POST',
            data: {
                action: 'getDepartmentFaculty',
                id: id,
            },
    
            success: (html) => {
                resolve(html);
            },
    
            error: (xhr) => {
                reject(xhr.responseText)
            }
        });
    });

}

function getDepartmentByFacultyId(id, id2 = null) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: processURL,
            type: 'POST',
            data: {
                action: 'getdepartmentbyfacultyid',
                id: id,
                newid: id2
            },
            success: (data) => {
                resolve(data);
            },
            error: (xhr) => {
                reject(xhr.responseText);
            }
        });
    });
}

function getFaculty(id) 
{ 
    return new Promise((resolve, reject) => {

        $.ajax({
            url: processURL,
            type: 'POST',
            data: {
                action: 'getFaculty',
                id: id,
            },
    
            success: (html) => {
                resolve(html);
            },
    
            error: (xhr) => {
                reject(xhr.responseText)
            }
        });
    });

}


function Alert(type = 0, message) {
    if(type == 1) {
       return Swal.fire('Success', message, 'success');
    } else if(type == 2) {
        return Swal.fire('Warning', message, 'warning');

    } else if(type == 0) {
        return Swal.fire('Error', message, 'error');
    }
} 