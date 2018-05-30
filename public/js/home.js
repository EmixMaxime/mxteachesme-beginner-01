console.log('home.js')

const form = $('#myform')
const feed = $('#feed')

const formElements = {
    message: form.find('textarea')
}

const success = (data) => {
    const d = JSON.parse(data)

    formElements.message.val('')
    if (d.html) {
        feed.append($(d.html))
    }
}

const sendError = (el, msg) => {
    const errorElement = $('<div>', {class: 'text-red text-xs italic'}).text(msg)
    
    el.after(errorElement)
}

const error = ({responseText, status}) => {
    if (status === 400) {
        const errors = JSON.parse(responseText)
        if (errors.message) {
            sendError(formElements.message, errors.message)
        }
    }
}

form.submit((e) => {
    e.preventDefault()

    $.ajax({
        type: 'POST',
        url: e.target.action,
        data: {
            message: formElements.message.val()
        },
        success,
        error
    })
})
