$().ready(() => {
        var events = [
            {'Date': new Date(2020, 3, 28), 'Title': 'Gouter Signature', 'Link': 'programmation.php'},
            {'Date': new Date(2020, 4, 10), 'Title': 'Gouter Signature', 'Link': 'programmation.php'}
        ];
        var settings = {
            Color: '',
            LinkColor: '',
            NavShow: true,
            NavVertical: false,
            NavLocation: '',
            DateTimeShow: true,
            DateTimeFormat: 'mmm, yyyy',
            DatetimeLocation: '',
            EventClick: '',
            EventTargetWholeDay: false,
            DisabledDays: []
        };
        var element = document.getElementById('caleandar');
        caleandar(element, events, settings);
    }
);