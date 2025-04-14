import 'vuetify/styles'
import { createVuetify } from 'vuetify'

const lightTheme = {
    dark: false,
    colors: {
        background: '#E0F2F1',
        primary: '#1976d2',
        secondary: '#424242',
        accent: '#82b1ff',
        info: '#2196f3',
        success: '#4caf50',
        warning: '#ffc107',
        error: '#b71c07',
        lightning: '#C6FF00',
        button: '#114B5F',
        buttonLight: '#186E8B',
        'grade-1': '#43A047',
        'grade-2': '#D4E157',
        'grade-3': '#FFEE58',
        'grade-4': '#F9A825',
        'grade-5': '#BF360C',

        'grade-1-off': '#AFCA97',
        'grade-2-off': '#D7DB77',
        'grade-3-off': '#ECD592',
        'grade-4-off': '#EEB554',
        'grade-5-off': '#CA8673',


        striped_1: '#EEEEEE',
        striped_2: '#FAFAFA',

        pastColor: '#6E7E85',
        todayColor: '#F0C808',
        futureColor: '#114B5F',
        pastFreeColor: '#17B890',
        todayFreeColor: '#399E5A',
        futureFreeColor: '#399E5A',
        pastExamColor: '#F2A541',
        todayExamColor: '#FF6542',
        futureExamColor: '#FF6542',

    },
}

const darkTheme = {
    dark: true,
    colors: {
        background: '#121212',
        primary: '#BB86FC',
        secondary: '#03DAC6',
        accent: '#1E1E1E',
        info: '#2196F3',
        success: '#4CAF50',
        warning: '#FB8C00',
        error: '#CF6679',
        button: '#114B5F',
        buttonLight: '#186E8B',
        'grade-1': '#43A047',
        'grade-2': '#D4E157',
        'grade-3': '#FFEE58',
        'grade-4': '#F9A825',
        'grade-5': '#BF360C',

        'grade-1-off': '#AFCA97',
        'grade-2-off': '#D7DB77',
        'grade-3-off': '#ECD592',
        'grade-4-off': '#EEB554',
        'grade-5-off': '#CA8673',


        striped_1: '#EEEEEE',
        striped_2: '#FAFAFA',

        pastColor: '#6E7E85',
        todayColor: '#F0C808',
        futureColor: '#114B5F',
        pastFreeColor: '#17B890',
        todayFreeColor: '#399E5A',
        futureFreeColor: '#399E5A',
        pastExamColor: '#F2A541',
        todayExamColor: '#FF6542',
        futureExamColor: '#FF6542',
    },
}

export default createVuetify({
    theme: {
        defaultTheme: 'light',
        variations: {
            colors: ['primary', 'secondary', 'background', 'accent'],
            lighten: 4,
            darken: 4,
        },
        themes: {
            light: lightTheme, // Use your custom theme here
            dark: darkTheme, // Use your custom theme here
        },

    },

})
