
#  Evrişimli Sinir Ağlarıyla Diyabetik Retinopati Sınıflandırması: GPU-TPU Verimlilik Analizi ve Tanısal API Geliştirme

Bu proje 2024 Tübitak 2204-A Liselerarası Proje Yarışmasına katılmıştır. Proje **Eskişehir Türk Telekom Mesleki ve Teknik Anadolu Lisesi** Öğrencileri ***Metehan Çakan, Aleyna Aktuğ ve Doğan Can Karakoç*** tarafından hazırlanmıştır. 

## Özet 
Diyabetin başlangıcından itibaren görülebilen ve diyabet sonrasında çok hızlı bir ilerleme gösterebilen retinal hasarların erken teşhisi tedavi için büyük önem taşımaktadır. Diyabetik Retinopati hastalığının medikal yapay zeka uygulamaları ile sınıflandırılarak hastaların tedavi sürecine yönlendirilmesi erken teşhisin yanında uzmanların iş yükünü, insana bağlı hataları ve sağlık alanında yapılan harcamaları azaltarak verimlilik sağlayabilir. Projenin ana hedef kitlesi diyabet hastaları ve uzman hekimlerdir. Bu projede Diyabetik Retinopati düzeyleri ResNet, InceptionV3 ve EfficientNetB7 algoritmaları kullanılarak GPU ve TPU üzerinde ayrı ayrı model geliştirilerek performans ve verimlilik açısından karşılaştırılmıştır. Çalışmadan elde edilen bulgulara göre en yüksek doğruluk oranına EffcientNetB7 algoritması ile ulaşılmıştır. Ayrıca eğitim sürecinde TPU kullanmanın GPU’ya göre ortalama 4 kat verimli olduğu bunun yanında doğruluk, f1 skoru, kesinlik ve duyarlılık değerlerinin GPU ve TPU’ya bağlı istatistiksel olarak anlamlı farklılaşma göstermediği sonucuna ulaşılmıştır (p<,05). Çalışmada açık kaynaklı yayınlanan Messidor, EyePacs ve APTOS veri setleri birleştirilerek elde edilen toplam 92.501 adet fundus görüntüsü kullanılmıştır. Veri seti geliştirilen tüm modeller için eğitim (%80), doğrulama (%10) ve test (%10) şeklinde bölünmüştür. Aşırı uyumun önüne geçebilmek amacı ile öğrenme oranı azaltma, veri artırma ve dropout teknikleri uygulanmıştır. EffcientNetB7 ile TPU üzerinde geliştirilen modelde %84’lük doğruluk oranına ulaşılmıştır. Geliştirilen modelin katsayıları kullanılarak fundus görüntüleme cihazlarının anlık teşhis yapabilmesi için bir API geliştirilmiş web tabanlı bir uygulama ile entegre edilerek yerel geliştirme ortamında çalıştırılarak test edilmiştir.

## Kullanılan Teknolojiler
* Projenin model geliştirme aşaması Kaggle platformunda Tesla P100 GPU ve T3 TPU ile TensorFlow ve Keras kütüphaneleri kullanılarak gerçekleştirilmiştir.

* Geliştirilen model kaydedilerek dışarı aktarılmış ve sonrasında API ve web uygulamasına entegrasyonu sağlanmıştır. 

* Web uygulaması Laravel 8 Framework'ü kullanılarak geliştirilmiştir.

* Kullanıcıdan alınan jpg formatın resim dosyası sunucu üzerine kaydedilmekte ve Flask API'ına tahmin için HTTP isteğinde bulunulmaktadır. 

* Flask ile geliştirilen tahmin API'ı yanıt olarak 6 hastalık için yüzdesel tahmin sonuçlarını döndürmektedir.

* PHP dönen tahmin sonucunu önyüze aktarmaktadır.

* Önyüzde alınan tahmin sonuçları JavaScript ile büyükten küçüğe doğru sıralanarak kullanıcıya sonuç olarak gösterilmektedir.

* Ayrıca uzman veri girişine imkan sağlanmaktadır, bu ekranda uzman hekimlerin teşhis koydukları görseller veri tabanına kaydedilmekte böylelikle veri setinin gelişimine katkı sağlanması amaçlanmaktadır.


## Veri Seti
Projede kullanılan veri setine buradan ulaşabilirsiniz: [Veri Seti](https://www.kaggle.com/datasets/ascanipek/eyepacs-aptos-messidor-diabetic-retinopathy)


# Uygulama

Projenin Web Uygulamasına buradan ulaşabilirsiniz: [Uygulamanın Yayında Olan Versiyonu](http://...)

# REST API

Fundus görüntüleme cihazlarında ve farklı uygulamalarda kullanılmak üzere geliştirilen API'a ait HTTP istek türleri

## API EndPoint Listesi

### 1. Resim Dosyası ile Tahmin (predictWithImage)
#### Request (İstek)

`POST /api/predict-with-image/`

    const data = new FormData();
    data.append("image", "../IMG_4895_2.jpg");

    const xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            console.log(this.responseText);
        }
    });

    xhr.open("POST", "http://34.118.92.185/api/predict-with-image");
    xhr.setRequestHeader("Authorization", "Bearer ...");

    xhr.send(data);

#### Response (Yanıt)

    {
        "image": "..\/img\/preds\/api_date_25-05-2023_21-17-01-559948419.jpg",
        "predicts": {
            "0 - No DR": 0.8316075801849365,
            "1 - Hafif": 0.0025978132616728544,
            "2 - Orta": 0.0003459408471826464,
            "3 - Şiddetli": 0.0003996501909568906,
            "4 - Proliferatif": 0.16152003407478333
        }
    }

### 2. Base64 Veri ile Tahmin (predictBase64)
#### Request (İstek)

`POST /api/predict-base64/`

const data = new FormData();
data.append("image", "data:image/jpeg;base64,...");

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://34.118.92.185/api/predict-base64");
xhr.setRequestHeader("Accept", "application/json");
xhr.setRequestHeader("Authorization", "Bearer ...");

xhr.send(data);

#### Response (Yanıt)

    {
        "image": "..\/img\/preds\/api_base64_date_25-05-2023_22-29-19-391309081.jpeg",
        "predicts": {
            "0 - No DR": 0.8316075801849365,
            "1 - Hafif": 0.0025978132616728544,
            "2 - Orta": 0.0003459408471826464,
            "3 - Şiddetli": 0.0003996501909568906,
            "4 - Proliferatif": 0.16152003407478333
        }
    }




