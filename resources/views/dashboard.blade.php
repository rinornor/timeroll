<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="text-center">
                <p>This is an application to manage the time you spend in a specific place or activity</p>
        <livewire:ShowAppearances />
        
        </div>
        <a href="{{ route('download-pdf')}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="auto" viewBox="-187.963 -153.725 616.463 648"><image width="490" height="641" xlink:href="data:image/png;base64,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 XS3UAFCP9Trx7tPv0+BrqEunvh8Kx/r7tdPgzalaqAGgHOv143Wq3ofJ+j69Pf2dB/rXcuTBjovM SlO1UAPAYLBTCPY+1ReWPYZAl4412PvlWL9O7QcFoQaAxlS9xjq/Vr1uhPIS6bss1HGS/vnv8ePf 4/vy8cvnflv+7mH5O1M4UnKNGgBOinW+EjxfBX63TMnfl1B/X47/LMdLrO9DqNeJehci/cbO/w4A 0Ix1CqHeZaE9LPG9W2J8n4X6e/Z7pVDvQqgnoQaA04M9dWL9LYQ5P75lxyFM07vWDwhCDQBjU3Ut 1ocQ63XCvsum6Npp7zhRTyZqADg91qkT6xjsfIruRbpIqAHg9Ol61wh2PGKkd4UfAOIPBUINACdE OqXyqfA82PsQ6FKkTdQA8EHRroU6D/auEOjhSAs1AJw+WaeBWO82RtpiMgD4oOm6NmlPAxO0U98A 8AFxrk3XUyPQ3dPdQg0AHxftVphbq7ztTAYAnxDt2q83nfIWagB4f4g/nFADwMdH/eTACzUAfGFC DQBCDQA3Y9PtV0INACZqAECoAUCoAQChBgCEGgCEGgAQagAQagBAqAEAoQYAoQYAhBoAhBoAEGoA QKgBQKgBAKEGAKEGAIQaABBqABBqAECoAUCoAQChBgCEGgCEGgAQagAQagBAqAEAoQYAoQYAhBoA hBoAEGoAQKgBQKgBAKEGAKEGAIQaABBqABBqAECoAUCoAQChBgCEGgCEGgAQagAQagBAqAEAoQYA oQYAhBoAhBoAEGoAQKgBQKgBAKEGAKEGAIQaABBqABBqAECoAUCoAQChBgCEGgCEGgAQagAQagBA qAEAoQYAoQYAhBoAhBoAEGoAQKgBQKgBAKEGAKEGAIQaABBqABBqAECoAUCoAQChBgCEGgCEGgAQ agAQagBAqAEAoQYAoQYAhBoAhNp/AgAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEG AIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgB AKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoA EGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoA hBoAEGoAEGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEA oQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBA qAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQ agAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgCh BgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCo AQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEGAIQaAIQaABBq AECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEGAKEGAIQa AIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoAQKgBAKEG AKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoAEGoAEGoA QKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgChBgCEGgAQagAQagBAqAFAqAEAoQYAhBoAhBoA EGoAEGoAQKgBAKEGAKEGAIQaAIQaABBqAECoAUCoAQChBgCh9p8AAIQaABBqABBqAECoAQChBgCh BgCEGgCEGgAQagBAqAFAqAEAoQYAoQYAhBoAEGoAEGoAQKgBQKgBAKEGAIQaAIQaABBqABBqAECo AQChBgChBgCEGgCEGgAQagBAqAFAqAEAoQYAoQYAhBoAEGoAEGoAQKgBQKgBAKEGAIQaAIQaABBq ABBqAECoAQChBoAbDPXsPykAN+6sLdz9gTcm5gBce4TP1rrdmd6s+ALAB3Ty8Afe8BQ+BoBLi+6n DaiHD3rzpWPKPmcyiQNwJcEuHe+epLeEem783jzwZufP/ukDAD441Fu6Nw/0dHOo5w1BPhZe47FO 0FN6feobAC4x1rXeHSttHAn4fOpEXfsp4jjwZp/T21PerksDcC2hfl6OVrRjM4cm6ZFQz403F9/g ejyFI4/0TqgBuMJQPxWO2Mdjal8Knk8JdS3Ox+wfjYF+zI5d9vefhRqAKwz1cenfQ2hgDPYxTN7D 67cOnaqXIn0sxPkhO35lkT4u/8ZOqAG44lC/tPDn0sC8iTHax06s5y0TdX4e/RjeUB7oX8vx8ga/ hUh/E2oAbiTULy38sfTwZ9bHGOwY65ROOPU9V95MPkmvPy38rET6MYR6qoRauAH46mEuhXoOoV6b +Pe/xz9ZH9delibr7gKzQ+EfnypvpBbpu0qk75avvw8TtUgDcA2xjkPs2sV/llj/nU3YtVh3T3/3 Tn3X3kh+qnuNcR7pn4VQx2lapAG41FiXBtm8j39nk/U6Xf/KYl2bqrsTdQp/IV6bXlezrefh99kk /bz82fd/j/sl4vvlmLLPE2gAriHYa2Sfswauof6xBPr/ltcfy5/lq8LzxqZasA/hH54aPy3kPzEc QqTz5ek/wjS9T/Xr0wBwqbGeQ6jjpeF/suNHYaJ+bkzUc2uijm8gH+vX+6Pz683H7CeJNdJxtbfr 0wBcyySd/7p05jmP9Y/s+JlN1b3r1KkV6nWyXt/AlIV6DW7czGQd99dJujZNizMA1zZRx6k6v16d 38Icb9WK16lLPwxsuj1rDXI+SR/DGzpkR7x3WqQBuNZYx71G8t3KHkKkHyvT9Obbs1Jhqk6FgK/3 S/9Kb2/Hyk95CzUA1xbqlPq7d8YttmvTdCpN1b2JOn8DqfB7z0uYH9PvU90iDYBY/w52Hu7WgzpO ukadGpGOod4VIu2+aQCuPdIptR/7HONcexRmKsW6Fc8pTMS7wmstzrYLBeBWIp0Kk/HciHJ8Ta2J uhfq+Jofu8rHtdPdIg3Atcc6FWJd+rg0RW8OdfzzqRHt1Ii0QANwK8EuTci1ODcfb7k1otPga+tr CjYA1zxR98KdRqfoU+M5daZtYQZAuPvR7k7R743pdOavBwC3Mm0PB/qcYRVnADhTmAEAAIBz+H8B BgBXsFrC8qztKQAAAABJRU5ErkJggg==" transform="translate(-61.5 -146.725)" overflow="visible" opacity=".75"/><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-1530.638" y1="1263.974" x2="-1361.192" y2="956.949" gradientTransform="translate(1619.806 -922.943)"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#e1e1e1"/></linearGradient><path d="M-46.192-137.833h278.339C293.931-93.941 364.489-28.38 412.777 43.095V471.29H-46.192v-609.123z" fill="url(#a)"/><path d="M-46.192-137.833h278.339C293.931-93.941 364.489-28.38 412.777 43.095V471.29H-46.192v-609.123z" fill="none" stroke="#c8c8c8" stroke-width=".5"/><image width="213" height="212" xlink:href="data:image/png;base64,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 EAjEIeN/AgwAQ7ZU3rULPwoAAAAASUVORK5CYII=" transform="matrix(.9953 0 0 1 216.498 -153.725)" overflow="visible" opacity=".75"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="-1317.196" y1="896.203" x2="-1291.077" y2="872.127" gradientTransform="translate(1618.831 -924.375)"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#c8c8c8"/></linearGradient><path d="M232.147-137.833C299.36-88.92 363.359-28.669 412.777 43.095 380.77 9.85 336.879-7.895 284.796-5.617c6.153-61.643-17.619-101.453-52.649-132.216z" fill="url(#b)"/><path d="M232.147-137.833C299.36-88.92 363.359-28.669 412.777 43.095 380.77 9.85 336.879-7.895 284.796-5.617c6.153-61.643-17.619-101.453-52.649-132.216z" fill="none" stroke="#c8c8c8" stroke-width=".5"/><path fill="none" stroke="#c8c8c8" stroke-width="6.005" d="M-173.561-95.046h414.34V44.215h-414.34z"/><g><path d="M115.929 262.786c11.188-21.929 23.902-46.636 34.08-71.44l4.023-9.792C140.74 130.969 132.769 90.365 139.89 64.11c1.917-6.845 9.845-10.998 18.32-10.998l5.165.076h.948c11.604-.178 17.068 14.583 17.688 20.322 1.023 9.558-3.398 25.733-3.398 25.733 0-6.532.256-17.087-3.867-26.195-4.799-10.538-9.383-16.835-13.493-17.833-2.074 1.387-4.092 4.257-4.782 9.777-1.432 7.741-1.86 17.512-1.86 22.549 0 17.796 3.504 41.285 10.39 65.499 1.3-3.749 2.442-7.351 3.352-10.726 1.412-5.319 10.389-40.578 10.389-40.578s-2.262 46.935-5.422 61.136c-.677 3.001-1.424 5.97-2.202 9.007 11.355 31.728 29.652 60.044 51.479 80.425 8.605 8.043 19.475 14.527 29.762 20.438 22.465-3.21 43.149-4.726 60.405-4.535 22.894.303 39.698 3.688 46.504 10.392 3.332 3.258 4.684 7.192 5.104 11.604.101 1.716-.735 5.748-.98 6.76.245-1.225.245-7.249-18.133-13.114-14.475-4.627-41.563-4.483-74.068-1.023 37.597 18.395 74.225 27.533 85.833 22.055 2.838-1.384 6.28-6.1 6.28-6.1s-2.046 9.296-3.516 11.62c-1.875 2.525-5.553 5.26-9.04 6.182-18.332 4.892-66.051-6.427-107.65-30.196-46.479 6.845-97.521 19.489-138.437 32.91-40.208 70.462-70.436 102.823-95.026 90.512l-9.041-4.546c-3.676-2.103-4.236-7.219-3.387-11.386 2.867-14.027 20.456-35.154 55.787-56.251 3.804-2.302 20.743-11.259 20.743-11.259s-12.541 12.139-15.479 14.521c-28.2 23.108-49.014 52.182-48.494 63.453l.102.982c23.955-3.413 59.879-52.171 106.063-142.537m14.636 7.494c-7.714 14.528-15.254 27.998-22.215 40.366 38.506-16.133 79.95-26.457 119.4-33.791-5.302-3.661-10.448-7.538-15.292-11.636-21.725-18.394-38.288-41.341-50.294-65.487-7.612 20.513-16.667 42.311-31.599 70.548" fill="#f91d0a"/></g><path d="M372.806 326.104h1.486c1.649 0 3.055-.499 3.055-1.925 0-1.135-.714-1.923-2.837-1.923-.851 0-1.35.077-1.704.154v3.694zm0 6.666h-2.204v-11.865a24.49 24.49 0 0 1 4.128-.337c1.984 0 2.973.337 3.748.911.715.496 1.213 1.429 1.213 2.499 0 1.491-1.051 2.401-2.344 2.839v.137c1.074.423 1.647 1.354 2.007 2.842.337 1.844.556 2.559.851 2.976h-2.28c-.356-.417-.637-1.489-.934-3.117-.274-1.29-1.048-1.847-2.757-1.847h-1.428v4.962zm2.288 5.196c-6.277 0-11.368-5.089-11.368-11.364 0-6.279 5.091-11.371 11.368-11.371 6.275 0 11.368 5.092 11.368 11.371 0 6.276-5.093 11.364-11.368 11.364zm9.09-11.366c0-5.023-4.071-9.096-9.092-9.096a9.096 9.096 0 0 0 0 18.19c5.021 0 9.092-4.072 9.092-9.094z" fill="#f91d0a"/><g fill="#1a171b"><path d="M167.819 413.897l-3.081-19.909c-.885-5.728-2-14.68-2.869-20.884h-.333c-.91 6.249-2.162 15.466-3.074 20.934l-3.321 19.859h12.678zM153.47 426.85l-4.014 22.071h-14.818l18.475-91.832h18.186l16.78 91.832H173.19l-3.946-22.071H153.47zM221.81 407.905c0-1.237 0-2.669-.221-3.965-.605-4.547-2.828-8.63-6.374-8.63-6.125 0-8.381 9.603-8.381 20.812 0 12.873 3.211 20.22 8.159 20.22 2.269 0 4.853-1.27 6.282-6.663.331-1.082.533-2.526.533-4.205l.002-17.569zm15.2-53.25v75.217c0 5.976.286 13.313.513 19.051h-13.146l-.845-7.666h-.337c-2.185 4.718-7 8.735-12.726 8.735-12.591 0-18.83-15.104-18.83-34.173 0-23.239 9.316-34.55 19.456-34.55 5.301 0 8.711 2.838 10.448 6.92h.269v-33.534h15.198zM268.671 437.289c5.822 0 7.238-11.897 7.238-21.755 0-9.376-1.416-21.569-7.481-21.569-6.424 0-7.777 12.193-7.777 21.569 0 11.307 1.718 21.755 7.909 21.755h.111zm-.268 12.703c-14.016 0-22.816-12.255-22.816-34.158 0-23.918 11.272-34.563 23.15-34.563 13.816 0 22.503 12.857 22.503 34.166 0 27.396-13.589 34.557-22.725 34.557l-.112-.002zM314.954 425.157c0 1.646.268 3.201.601 4.243 1.517 5.573 4.121 6.941 6.194 6.941 5.859 0 8.245-8.108 8.245-21.08 0-11.81-2.516-19.951-8.312-19.951-2.893 0-5.324 3.419-6.149 7.077-.311 1.14-.577 2.948-.577 4.185l-.002 18.585zm-15.194-70.502h15.194v34.667h.244c3.011-5.113 6.998-8.053 12.766-8.053 11.478 0 17.229 14.195 17.229 32.732 0 23.45-8.58 35.989-19.697 35.989-5.305 0-8.846-2.557-12.033-9.043h-.313l-.868 7.974h-13.04c.205-5.531.521-13.075.521-19.051v-75.216h-.003zM381.647 409.288c.064-9.347-2.452-15.878-7.266-15.878-5.503 0-7.845 8.766-8.022 15.878h15.288zm-15.33 11.707c.178 12.03 5.991 15.96 13.211 15.96 4.566 0 8.515-1.107 11.409-2.306l2.029 11.902c-4.011 1.899-10.252 3.08-16.227 3.08-16.312 0-25.224-12.122-25.224-32.854 0-22.237 10.339-35.604 23.845-35.604 13.034 0 20.278 11.809 20.278 31.08 0 4.413-.182 6.886-.449 8.825l-28.872-.083z"/></g><g><image width="445" height="171" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAb0AAACrCAYAAADy1kJ2AAAACXBIWXMAAAsSAAALEgHS3X78AAAA GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABN9JREFUeNrs211vGkcUgOFZwDZR 7fRDSaRetP//n0WKKid2jGoMmM4oZ8R4u8aJKpVR8jzSERjwXnDz6rC7KQEAAPB9GV54b/jKzwLA qexHz/dfG7369yyez5r4iR4AvUavzmPzOA5iWkxsdiV083hvEc9nMTY+AHrb8B5jdnm2Mbup8C1G ByhhO8tznmcZcxGvteEDgB7U4G3yrPPcxzzEa7vnNr264ZXgXeb5Oc/reL5stj7bHgC9bHl1uyuh u8tzm+cmntefOnfj6NWfNhcRuBK8t3ne5fktz1XEcCF4AHQUvm1sdZ/zXOf5EO+1P3MONZJt9GZN 9F5H8P7I83ueX+P1s+SiFgD6CF6ZTWx5H/O8j/fKz5yreH3TbHz/upCl/HxZzuFdxoZXgvdnnjd5 fkqHc3sAcGr1XF4J3FW8tooAXkTTnixp4+jVC1mWcYBfInjvIoTn6XAbAwCcctMr0Ss/bd7Fa7fR rmWzpE1Gr71dob2C81VseJfpcF5v7rsGoAO7iF7d8F5Fp9o7Dp6ckltMHKR+sN6nVwN4HuuiTQ+A Xja91ISuduvZW+zG0Rue2fzq7Qwzmx4AHZmPWjWMWnY0eulIBNOxAwHA/7zpfXObXIkJwA9D9AAQ PQAQPQAQPQAQPQAQPQAQPQAQPQAQPQAQPQAQPQBEDwBEDwBEDwBEDwBEDwBEDwBEDwBEDwBEDwBE DwDRAwDRAwDRAwDRAwDRAwDRAwDRAwDRAwDRAwDRA0D0fAUAiB4AiB4AiB4AiB4AiB4AiB4AiB4A iB4AiB4AiB4AogcAogcAogcAogcAogcAogcAogcAogcAogcAogeA6AGA6AGA6AGA6AGA6AGA6AGA 6AGA6AGA6AGA6AEgegAgegAgegAgegAgegAgegAgegAgegAgegAgegAgegCIHgCIHgCIHgCIHgCI HgCIHgCIHgCIHgCIHgCIHgCiBwCiBwCiBwCiBwCiBwCiBwCiBwCiBwCiBwCiB4DoAYDoAYDoAYDo AYDoAYDoAYDoAYDoAYDoAYDoAYDoASB6ACB6ACB6ACB6ACB6ACB6ACB6ACB6ACB6ACB6AIgeAIge AIgeAIgeAIgeAIgeAIgeAIgeAIgeAIgeAKIHAKIHAKIHAKIHAKIHAKIHAKIHAKIHAKIHAKIHAKIH gOgBgOgBgOgBgOgBgOgBgOgBgOgBwH+zeOH9/QuPAHAq39ymxZEDlHlsZhePxeC7BuDEwWvbVGd/ LIJTm179x23MJs9DTDH3XQPQgV3Tp03TrcdmSZuM3nizq6H7O88qz1187jx9OQ9o0wOgh03vIRq1 imbVAE5tfk82vX0TvPs8n/N8yvNXvF8OeJZc/AJAH2qzVtGqT9Gu+yZ8+6lNr0avrIrrqOZ1nvfx XjnIMqI32PQA6GDT2zeL2sdo1nU0bB1Nm4xe3fK28c+3eT40G95V+vLT5kLwAOgofKVbD7GcXUe7 bqNl2/G2Nz6nV6N3E6+vo57L+Gy9iEX4ADh18FJsc7VddxG8myZ6T87ptfEaImpnsdUtYy7S4Vye 83kA9KS9AHMdsbtPhwtadseiN0TY5rHZ1e2uDZ4tD4Cetr32fvJ620K9f+/ZTa/9e9YEcEguXgGg 7/i1t97VxzaML25tw8QmCAC9bnxpvNkBwA/rHwEGAHVu72TognH9AAAAAElFTkSuQmCC" transform="matrix(.9978 0 0 .9942 -187.963 -107.188)" overflow="visible" opacity=".3"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="-2155.72" y1="918.355" x2="-2236.214" y2="1166.092" gradientTransform="matrix(1 0 0 -1 2229.395 1017.359)"><stop offset=".127" stop-color="#8a0000"/><stop offset=".244" stop-color="#900000" stop-opacity=".999"/><stop offset=".398" stop-color="#a00000" stop-opacity=".999"/><stop offset=".573" stop-color="#bc0000" stop-opacity=".998"/><stop offset=".761" stop-color="#e20000" stop-opacity=".997"/><stop offset=".867" stop-color="#fa0000" stop-opacity=".996"/></linearGradient><path fill="url(#c)" d="M-173.741-94.495h414.34V44.768h-414.34z"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="-2152.32" y1="908.536" x2="-2239.196" y2="1175.913" gradientTransform="matrix(1 0 0 -1 2229.395 1017.359)"><stop offset=".315" stop-color="#5e0000"/><stop offset=".444" stop-color="#830000" stop-opacity=".999"/><stop offset=".618" stop-color="#ae0000" stop-opacity=".998"/><stop offset=".775" stop-color="#cd0000" stop-opacity=".997"/><stop offset=".908" stop-color="#e00000" stop-opacity=".996"/><stop offset="1" stop-color="#e70000" stop-opacity=".996"/></linearGradient><path d="M248.511 53.122h-429.747V-102.85h429.747V53.122zM233.053-87.389h-398.841V37.629h398.841V-87.389z" fill="url(#d)"/><path d="M-65.448-74.06h30.15c8.963 0 15.836 2.645 20.617 7.934 4.815 5.25 7.221 12.746 7.221 22.494 0 9.79-2.405 17.329-7.221 22.619-4.781 5.25-11.654 7.875-20.617 7.872h-11.985v32.366h-18.165V-74.06m18.167 17.431v26.056h10.052c3.521 0 6.243-1.124 8.162-3.373 1.919-2.292 2.878-5.521 2.878-9.687 0-4.166-.958-7.374-2.878-9.623-1.918-2.249-4.641-3.374-8.162-3.374l-10.052.001m70.774.749V1.044h6.509c7.425 0 13.088-2.437 16.986-7.311 3.932-4.874 5.899-11.956 5.899-21.244 0-9.249-1.952-16.286-5.853-21.121-3.898-4.832-9.578-7.248-17.033-7.248h-6.508M5.327-74.06h19.155c10.696 0 18.655 1.02 23.874 3.06 5.254 2.002 9.752 5.416 13.495 10.249 3.304 4.206 5.756 9.06 7.36 14.557 1.604 5.501 2.406 11.727 2.406 18.684 0 7.039-.803 13.331-2.406 18.871C67.607-3.142 65.154 1.71 61.85 5.918c-3.774 4.831-8.304 8.269-13.587 10.31-5.285 1.999-13.211 2.998-23.781 2.998H5.327V-74.06m80.209 0h49.023v18.181h-30.858v17.372h29.018v18.185h-29.018v39.549H85.536V-74.06" fill="#fff9f9"/></g></svg> </a>
    
            </div>
        </div>
    </div>
</x-app-layout>
