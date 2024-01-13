<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tahmin</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            /* html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.1}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.15rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.1rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.1rem;padding-right:1.1rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.1rem;padding-right:1.1rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}} */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="/css/default.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0" style="display: flex; justify-content: flex-start;">
            <div class="hidden fixed top-0 left-0 px-6 py-4 sm:block" style="margin-left: 15%;">
                <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"  style="padding-bottom: 7px; text-decoration: none; font-size: 1.3em; margin-right: 1em;">Anasayfa</a>
                <a href="{{ url('/predict') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"  style="text-decoration: none; font-size: 1.3em; margin-right: 1em;">Teşhis</a>
                <a href="{{ url('/docs') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"  style="text-decoration: none; font-size: 1.3em; margin-right: 1em;">Dökümantasyon</a>
                <a href="{{ url('/abstract') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"  style="border-bottom: 1px solid #302def; text-decoration: none; color: #302def; font-size: 1.3em; margin-right: 1em;">Hakkında</a>
                <a href="/api-doc/api-doc.html" class="text-sm text-gray-700 dark:text-gray-500 underline"  style="text-decoration: none; font-size: 1.3em; margin-right: 1em;">API</a>

            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('auth.home') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('auth.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ __('auth.register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="container" style="color: #e2e8f0; font-size:21px;">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="font-family: 'Nunito', sans-serif; font-size: 1.1em; color: #ef3c2d; font-weight: 900;">
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-gray-700 dark:text-gray-500" style="text-align: justify;">
                        Diyabetin başlangıcından itibaren görülebilen ve diyabet sonrasında çok hızlı bir ilerleme gösterebilen retinal hasarların erken teşhisi oldukça önemlidir. Diyabetik Retinopati hastalığının medikal yapay zeka uygulamaları tarafından sınıflandırılarak hastaların tedavi sürecine yönlendirilmesi erken teşhisin yanında uzmanların iş yükünü azaltabilir, insana bağlı hataları azaltabilir ve sağlık harcamalarında verimlilik sağlayabilir. Projenin ana hedef kitlesi diyabet hastaları ve uzman hekimlerdir. Bu projede Diyabetik Retinopati düzeyleri ResNet, InceptionV3 ve EfficientNetB7 algoritmaları kullanılarak incelenmiş ayrıca tüm modeller GPU ve TPU üzerinde ayrı ayrı geliştirilerek performans ve verimlilik açısında incelenmiştir. Çalışmadan elde edilen bulgulara göre en yüksek doğruluk oranına EffcientNetB7 ile ulaşılmıştır. Ayrıca eğitim sürecinde TPU kullanmanın GPU kullanmaya göre ortalama 4 kat daha verimli olurken doğruluk, f1 skoru, kesinlik ve duyarlılık değerlerinin GPU ve TPU’ya bağlı anlamlı farklılaşma göstermediği sonucuna ulaşılmıştır. Çalışmada açık kaynaklı yayınlanan Messidor (Decencière, ve diğerleri, 2014), EyePacs (Dugas, Jared, & Cukierski, 2015) ve APTOS (Karthik & Sohier, 2019) veri setleri birleştirilerek elde edilen toplam 92.501 adet fundus görüntüsü kullanılmıştır. Veri seti geliştirilen tüm modeller için eğitim (%80), doğrulama (%10) ve test (%10) şeklinde bölünmüştür. Aşırı uyumun önüne geçebilmek amacı ile öğrenme oranı azaltma, veri artırma ve dropout teknikleri uygulanmıştır. EffcientNetB7 ile TPU üzerinde geliştirilen modelde %84’lük bir doğruluk oranına ulaşılmıştır. Geliştirilen modelin katsayıları kullanılarak fundus görüntüleme cihazlarının anlık teşhis raporu sunabilmesi amacı ile bir API geliştirilmiş web tabanlı bir uygulama ile entegre edilerek yerel geliştirme ortamında test edilmiştir. 
                        
                    </div>
                    
                </div>
                <div style="text-align: center; padding-top: 20px;">
                    <img src="img/results.png" alt="Model Sunuçları">
                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
