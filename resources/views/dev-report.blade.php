<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RPM - React Price Monitoring</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-green-500{--text-opacity:1;color:#00b100;}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 64"><path fill="red" d="M144.053 24.16c0-19.48-32.247-27.265-72.024-23.046C32.253 5.333 0 19.95 0 39.436c0 19.478 32.253 27.263 72.03 23.04 39.776-4.216 72.023-18.837 72.023-38.317z"/><path fill="#FFF" d="M28.938 17.626c.137-.067.314-.134.489-.17a2.13 2.13 0 0 1 .52-.038l-1.698 2.865 1.937 2.554s-.2.111-.582.19c-.352.071-.56.044-.56.044l-1.613-2.11-.346.07v2.447s-.138.098-.49.172c-.312.066-.49.033-.49.033v-5.467s.17-.106.499-.174c.322-.068.481-.032.481-.032v2.227l.346-.071 1.506-2.54zM32.613 16.732c1.348-.269 2.213.427 2.213 2.444s-.842 3.046-2.213 3.32c-1.37.273-2.213-.42-2.212-2.436 0-1.994.867-3.059 2.212-3.328zm0 .826c-.705.14-1.177.641-1.177 2.292-.001 1.644.472 1.96 1.177 1.82.721-.144 1.179-.647 1.179-2.291 0-1.65-.459-1.965-1.179-1.821zM38.878 15.663s.17-.102.49-.163c.324-.06.491-.021.491-.021v5.467s-.16.1-.483.16c-.358.068-.498.024-.498.024v-2.375c-.673.127-1.348.255-2.022.385v2.376s-.174.103-.49.164c-.351.068-.49.025-.49.025v-5.467s.161-.102.482-.164c.33-.063.498-.026.498-.026v2.235c.674-.13 1.348-.258 2.022-.385v-2.235zM45.638 19.16v1.876c-.131.07-.276.127-.429.154s-.307.031-.445.001v-1.074c-1.075.193-2.15.388-3.227.586v1.075a1.507 1.507 0 0 1-.435.15 1.278 1.278 0 0 1-.438.012v-1.878l.406-.075c.315-.268.529-.9.62-2.17.07-.93.14-1.858.207-2.787 1.048-.193 2.095-.383 3.143-.57v4.805l.598-.106zm-3.02-1.467c-.061.915-.214 1.598-.429 2.088l1.877-.341v-4.065l-1.301.236-.147 2.082zM50.084 13.582c.398-.067.567-.026.568-.026v5.467s-.16.097-.484.152c-.36.061-.497.014-.497.014v-1.9c0-1.51.076-2.247.076-2.247l-.03.004s-.154.502-.852 2.046l-1.094 2.425c-.008.002-.208.106-.6.174-.428.076-.581.033-.581.033v-5.467s.162-.099.482-.155c.33-.058.5-.018.506-.019v1.893c.001 1.402-.07 2.395-.07 2.395l.031-.006c.139-.515.515-1.382.89-2.21.363-.802.725-1.605 1.089-2.406 0-.001.169-.1.566-.167zM55.291 12.72s.077.175.077.408c.001.25-.077.448-.077.448l-1.358.22v4.682s-.176.099-.49.15c-.352.058-.49.01-.49.01v-4.68c-.466.077-.932.153-1.395.231a.93.93 0 0 1-.079-.406c0-.25.079-.45.079-.45 1.244-.208 2.488-.412 3.733-.613zM59.379 12.076c.047.11.076.23.076.362 0 .148-.022.299-.076.44-.729.112-1.457.226-2.186.34v1.558c.6-.095 1.202-.189 1.802-.282.047.118.076.246.077.378a1.203 1.203 0 0 1-.077.424l-1.802.282v1.643c.754-.119 1.508-.237 2.262-.353.046.118.077.247.077.379.001.14-.023.284-.077.424-1.081.166-2.163.336-3.243.509v-5.607c1.056-.169 2.111-.334 3.167-.497zM61.474 17.293s-.161.095-.484.144c-.36.054-.5.006-.5.006v-5.537c.686-.105 1.37-.208 2.057-.31 1.036-.155 1.71.456 1.709 1.5 0 1.043-.674 1.85-1.71 2.005l-1.072.16v2.032zm.935-2.998c.536-.08.821-.465.82-1.049 0-.583-.284-.885-.82-.805l-.935.14v1.855c.311-.048.623-.095.935-.141zM67.287 10.831c.852-.12 1.327.087 1.327.087.023.316-.114.56-.29.78 0 0-.438-.102-.928-.034-.814.115-1.406.628-1.405 2.24 0 1.613.591 1.924 1.405 1.81.552-.078 1.004-.304 1.004-.304.19.153.29.428.29.716 0 0-.513.343-1.403.468-1.52.214-2.323-.673-2.323-2.55 0-1.876.804-2.998 2.323-3.213zM72.389 10.283c.138-.058.313-.112.49-.135.184-.024.369-.017.522.001L71.7 12.89l1.94 2.697s-.2.096-.584.146c-.35.046-.558.003-.559.004l-1.618-2.23-.346.047v2.445s-.137.088-.491.137a1.402 1.402 0 0 1-.49-.003v-5.467s.17-.093.498-.138c.321-.045.483.004.483.004v2.227c.114-.016.23-.03.346-.047l1.51-2.428zM77.827 9.519c.399-.05.568 0 .568 0v5.467s-.162.09-.483.129c-.36.044-.499-.009-.498-.008v-1.9c0-1.512.076-2.245.076-2.245-.01 0-.02.002-.031.004.001 0-.153.493-.852 2.005l-1.095 2.374c-.01 0-.208.096-.599.146-.43.055-.583.005-.583.005V10.03s.161-.091.483-.133c.33-.042.499.007.505.006v1.893c.001 1.402-.069 2.391-.068 2.392l.03-.005c.139-.508.514-1.357.89-2.169l1.089-2.355s.17-.09.568-.14zM82.844 8.922a.915.915 0 0 1 .077.365 1.187 1.187 0 0 1-.077.436c-.729.084-1.456.169-2.186.255v1.558c.602-.072 1.202-.141 1.804-.21.046.12.075.247.075.38 0 .14-.023.283-.075.421l-1.804.21v1.644c.755-.089 1.509-.177 2.263-.263.047.12.077.248.077.38 0 .14-.023.284-.077.422-1.081.124-2.163.251-3.244.38V9.293c1.055-.126 2.112-.25 3.167-.371zM89.134 8.234c.397-.042.568.01.568.011v5.468s-.162.086-.483.12c-.362.037-.5-.019-.5-.019v-1.9c0-1.51.079-2.243.078-2.243l-.031.003s-.153.492-.851 1.99l-1.097 2.353c-.006 0-.207.092-.598.135-.428.047-.583-.006-.584-.006V8.678s.162-.088.484-.122c.331-.036.5.015.506.014v1.893c0 1.402-.067 2.39-.07 2.39a.4.4 0 0 1 .032-.004c.138-.505.514-1.347.89-2.151l1.088-2.335s.168-.087.568-.129zM92.155 7.85c1.242-.123 1.926.335 1.925 1.339 0 .568-.153 1.042-.598 1.311v.03c.52.184.758.637.758 1.291 0 .973-.652 1.65-2.162 1.8-1.02.1-1.48-.124-1.478-.125a1.078 1.078 0 0 1 .275-.784c.245.054.66.098 1.058.058.775-.077 1.296-.353 1.296-.968s-.376-.79-1.112-.717l-.575.058c-.1-.24-.1-.566 0-.811.191-.02.384-.038.575-.057.652-.065.966-.305.967-.873 0-.623-.476-.764-1.021-.71-.628.062-1.088.272-1.088.272-.215-.142-.315-.396-.298-.687 0 0 .567-.337 1.478-.427zM99.798 12.025v1.877c-.13.057-.275.101-.428.115a1.203 1.203 0 0 1-.445-.039v-1.075c-1.075.095-2.15.191-3.228.292v1.075a1.472 1.472 0 0 1-.436.11 1.299 1.299 0 0 1-.438-.028v-1.878l.407-.038c.316-.24.53-.851.62-2.114.07-.923.14-1.845.208-2.768 1.047-.097 2.094-.19 3.142-.282v4.805l.598-.052zm-3.019-1.742c-.061.91-.215 1.577-.43 2.049a583.53 583.53 0 0 1 1.879-.17V8.097l-1.304.117-.145 2.07zM103.932 6.879a.988.988 0 0 1 .075.368c0 .148-.025.297-.075.433-.73.058-1.457.117-2.186.177v1.558c.6-.05 1.2-.099 1.8-.146.047.12.079.25.078.383 0 .14-.023.282-.078.419l-1.8.146v1.643a682.58 682.58 0 0 1 2.26-.183 1.11 1.11 0 0 1 0 .802c-1.08.086-2.16.174-3.24.266V7.138c1.054-.09 2.109-.176 3.166-.26zM104.644 12.406a1.117 1.117 0 0 1 0-.732c.07-.006.162-.005.298-.039.238-.057.682-.456.827-2.406l.192-2.508a636.92 636.92 0 0 1 3.064-.224v5.537s-.16.081-.483.104c-.36.027-.498-.033-.49-.034V7.33l-1.226.089-.13 1.755c-.207 2.803-1.089 3.22-1.61 3.26a1.52 1.52 0 0 1-.442-.028zM113.79 6.18c.397-.024.565.035.566.035v5.467s-.163.08-.483.1c-.36.023-.497-.039-.498-.038V9.842c.001-1.51.078-2.238.077-2.238l-.03.001s-.153.485-.85 1.954l-1.096 2.308c-.006 0-.207.083-.598.11-.427.028-.582-.03-.581-.03V6.478c-.001 0 .161-.081.482-.103.33-.022.498.036.505.036v1.893c0 1.402-.067 2.386-.067 2.386.009 0 .02 0 .03-.002.138-.5.514-1.326.889-2.114l1.086-2.289c-.001 0 .168-.08.567-.106zM119.217 11.402c-.001 0-.14.078-.498.098-.322.017-.482-.043-.482-.043v-2.08l-.69.039-1.17 2.146s-.206.081-.559.102c-.351.021-.55-.037-.55-.037l1.24-2.262c-.66-.195-1.049-.763-1.049-1.559 0-1.035.672-1.768 1.706-1.827.684-.04 1.367-.077 2.052-.114v5.537zm-1.914-4.606c-.535.03-.82.374-.82.95s.285.887.82.858c.312-.019.624-.036.934-.053V6.744l-.934.052zM73.354 19.534c-4.58.604-6.976 4.958-6.977 9.919 0 4.967 2.395 8.654 6.977 8.05 4.58-.596 6.983-4.917 6.98-9.879-.002-4.966-2.397-8.687-6.98-8.09zm0 15.637c-1.524.198-2.63-1.483-2.631-6.305-.002-4.824 1.107-6.802 2.631-7 1.524-.195 2.634 1.487 2.634 6.31.002 4.827-1.107 6.797-2.634 6.995zm27.042-18.888c-4.582.504-6.976 4.808-6.979 9.768.002 4.962 2.4 8.705 6.979 8.201 4.58-.499 6.978-4.766 6.976-9.73.003-4.962-2.4-8.74-6.976-8.239zm0 15.636c-1.526.164-2.632-1.534-2.634-6.36.003-4.827 1.11-6.78 2.634-6.944 1.527-.164 2.631 1.543 2.632 6.366.001 4.827-1.107 6.769-2.632 6.938zm-54.751-8.446c-4.58.702-6.978 5.111-6.978 10.072.002 4.965 2.398 8.6 6.978 7.897 4.58-.697 6.978-5.071 6.977-10.034.001-4.962-2.397-8.633-6.977-7.935zm0 15.636c-1.526.231-2.63-1.42-2.632-6.246.002-4.825 1.107-6.825 2.632-7.058 1.526-.233 2.631 1.425 2.633 6.252 0 4.824-1.108 6.818-2.633 7.052zm85.206-8.086c1.55-.132 3.1-.262 4.649-.387a75809.12 75809.12 0 0 0-4.97-15.471c-.366-.97-1.342-1.44-2.695-1.317a7.293 7.293 0 0 0-1.567.317l-.008-.004c-1.55 5.892-3.099 11.786-4.649 17.684.957-.09 1.915-.176 2.871-.263l.96-3.99c1.443-.128 2.884-.254 4.326-.38l1.083 3.81zm-4.942-5.373l1.566-6.508 1.766 6.215c-1.11.096-2.222.195-3.332.293zM35.23 26.93c1.147 5.111 2.292 10.223 3.438 15.337-1.406.223-2.812.449-4.219.677L32.21 31.217c-1.11 4.152-2.219 8.305-3.328 12.462 0 .009-.479.259-1.361.408-1.353.229-2.33-.149-2.695-1.094-.762-3.364-1.523-6.727-2.287-10.091-.782 4.144-1.566 8.29-2.35 12.436-.957.167-1.913.333-2.87.502 1.272-5.96 2.545-11.917 3.818-17.873l.015.006-.015-.054s.478-.263 1.36-.416c1.35-.23 2.633.098 3 1.039l2.321 10.25 3.358-12.566c0-.007.478-.26 1.36-.405 1.354-.222 2.326.17 2.694 1.11zm22.625-5.006s-.013.003-.018.001l-.005.002c-1.78.254-3.977.726-3.977.728v17.293c1.332-.196 2.666-.39 4-.58V32.65c5.574-.297 7.61-3.436 7.613-6.568 0-3.392-2.37-4.898-7.613-4.157zm0 9.04v-6.726c2.553-.715 3.364.692 3.363 2.57.004 2.385-.823 3.782-3.363 4.156zm58.513-8.04c2.457-.819 3.854-2.355 3.853-4.164 0-2.747-3.244-3.925-7.532-3.501v-.002c-.007 0-.01.001-.018.003h-.004c-1.837.183-3.98.552-3.98.552l.001 17.295c1.898-.195 3.794-.386 5.69-.571 4.098-.399 6.904-2.172 6.901-5.433 0-2.221-2.127-3.731-4.91-4.179zm-.396-3.433c-.001 1.929-1.544 2.89-3.284 2.703V17.57c1.607-.393 3.288 0 3.284 1.921zm-3.282 10.693l-.001-.002v-6.008c2.013-.194 4.262.312 4.26 2.925.002 2.15-1.964 3.079-4.259 3.085zm-20.402-.315c.004 3.265-3.303 5.415-6.993 5.863-2.752.335-4.821-.29-4.82-1.358-.002-.946 1.025-2.148 1.025-2.148s1.147 1.473 3.451 1.194c1.848-.225 3.224-1.531 3.223-3.476-.001-1.736-1.297-2.784-3.376-2.532-.621.075-1.245.151-1.867.23v-1.996l1.867-.23c1.738-.21 2.4-1.427 2.397-2.8 0-1.53-1.093-2.17-2.298-2.027-2.042.248-3.135 2.005-3.135 2.005s-1.125-.629-1.125-1.573c0-1.061 1.953-2.404 4.706-2.739 3.224-.39 5.887.975 5.887 3.53 0 1.895-1.565 3.358-3.785 4.18 2.831.137 4.843 1.571 4.843 3.877z"/><path fill="#FABE55" d="M115.534 42.146c1.912-1.794 1.98-3.295 2.648-4.442 0-.004-1.744.068-3.958 1.414-2.224 1.328-2.102 2.97-3.186 4.898 0 .002 2.502.002 4.496-1.87zM100.287 46.624c2.567-1.828 2.654-3.674 3.55-4.966 0 0-2.429-.4-5.346.969-2.905 1.365-2.807 3.202-4.244 5.324-.002 0 3.357.572 6.04-1.327zM121.204 39.567c1.502-1.581 1.549-2.815 2.07-3.79 0-.005-1.374.139-3.118 1.37-1.752 1.217-1.642 2.565-2.488 4.225 0 0 1.97-.158 3.536-1.805zM126.18 37.387c1.483-1.191 1.717-2.294 2.3-3.096 0 0-1.135-.097-2.758.751-1.625.84-1.77 2.071-2.74 3.434 0 0 1.65.144 3.199-1.089zM108.39 44.746c2.284-1.854 2.373-3.554 3.175-4.793 0 0-2.066-.071-4.708 1.231-2.647 1.283-2.514 3.15-3.81 5.216-.001.005 2.957.275 5.344-1.654zM123.797 39.228c-1.78.513-2.935 1.972-2.935 1.972 1.464.192 2.165.819 3.867.125 1.708-.698 2.355-2.067 2.355-2.067-.835.001-1.58-.527-3.287-.03z"/><path fill="#FABE55" d="M92.032 49.641c-3.265.906-12.696 3.668-25.725 5.19 11.65-2.665 23.07-9.438 23.07-12.627 0 0-21.889 13.114-47.984 13.114-18.699 0-32.478-6.05-32.478-17.214 0-10.212 13.79-16.197 13.79-16.197l-.275-.772S5.364 27.85 5.364 39.339c0 12.841 18.263 18.366 39.015 18.366 21.277 0 43.969-5.682 48.481-6.982 1.903 1.583 3.409 2.513 6.243 2.45 3.357-.109 5.098-1.13 5.098-1.13-1.592-.634-2.868-2.471-6.275-3.018-2.864-.466-5.118.297-5.894.616zM119.016 42.077c-2.098.162-3.638 1.523-3.638 1.523 1.634.56 2.354 1.491 4.367 1.063 2.052-.435 2.98-1.769 2.98-1.769-.938-.2-1.7-.971-3.71-.817zM100.706 48.34c2.434 1.172 3.554 2.837 6.522 2.48 2.959-.382 4.486-1.827 4.488-1.819-1.41-.467-2.54-1.677-5.546-1.894-3.14-.238-5.464 1.235-5.464 1.234zM108.731 46.16c2.063.839 3.017 2.217 5.522 1.686 2.494-.552 3.773-1.922 3.773-1.922-1.187-.307-2.142-1.301-4.683-1.277-2.653.018-4.612 1.515-4.612 1.513z"/></svg>
                        </a>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Текущая β версия 0.1.1</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Подключение ресурсов:</br>
                                    Авторизация и регистрация пользователей.</br>
                                    Добавление новых товарных позиций.</br>
                                    Тестирование изменений. </br>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-green-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Стабильная версия 1.0.0</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Подключение ресурсов:</br>
                                    Подключение отделов и распределение ролей отделов.</br>
                                    Публикация сводных отчетов в диаграммах и таблицах.</br>
                                </div>
                            </div>
                        </div>     
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            
                            <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Сообщить о проблеме
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        React Price Monitoring v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
