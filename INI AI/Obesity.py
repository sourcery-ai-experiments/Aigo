import warnings
warnings.filterwarnings("ignore", category=UserWarning)

import pandas as pd
from sklearn.neighbors import KNeighborsClassifier
from sklearn.preprocessing import LabelEncoder
from sklearn.metrics import accuracy_score, classification_report

# Fungsi untuk membaca data obesity
def load_obesity_data(file_path):
    df = pd.read_csv(file_path)
    return df

# Fungsi untuk menentukan BMI berdasarkan tinggi badan, berat badan, usia, dan gender
def calculate_bmi(height, weight, age, gender):
    # Menghitung BMI
    bmi = weight / ((height/100) ** 2)  # Tinggi dalam meter, ubah cm ke m

    # Mengkoreksi BMI berdasarkan usia dan jenis kelamin
    if gender.lower() == 'male':
        bmi += (0.03 * age)  # Menambahkan 0.03 setiap tahun untuk pria
    elif gender.lower() == 'female':
        bmi += (0.02 * age)  # Menambahkan 0.02 setiap tahun untuk wanita
    
    return bmi

# Fungsi untuk mengubah index aktivitas fisik menjadi kategori
def map_activity_level(activity_level):
    activity_mapping = {1: 'Low', 2: 'Moderate', 3: 'High', 4: 'Very High'}
    return activity_mapping.get(activity_level, 'Unknown')

# Fungsi untuk melakukan prediksi kategori obesitas berdasarkan BMI
def predict_obesity_category(bmi, knn_model):
    category = knn_model.predict([[bmi]])[0]
    return category

if __name__ == "__main__":
    # Membaca data obesity
    obesity_data = load_obesity_data("obesity_data.csv")
    
    # Mengubah kolom Gender menjadi numerik menggunakan LabelEncoder
    label_encoder = LabelEncoder()
    obesity_data['Gender'] = label_encoder.fit_transform(obesity_data['Gender'])

    # Memisahkan fitur input (X) dan output kelas (y)
    X = obesity_data[['BMI']]
    y = obesity_data['ObesityCategory']

    # Pelatihan model KNN
    knn_model = KNeighborsClassifier(n_neighbors=5)
    knn_model.fit(X, y)

    # Memasukkan inputan user
    height = float(input("Masukkan tinggi badan (cm): "))
    weight = float(input("Masukkan berat badan (kg): "))
    age = int(input("Masukkan usia: "))
    gender = input("Masukkan jenis kelamin (Male/Female): ")
    activity_level = int(input("Masukkan index aktivitas fisik (1-4): "))

    # Menghitung BMI
    bmi = calculate_bmi(height, weight, age, gender)

    # Mengubah index aktivitas fisik menjadi kategori
    activity_category = map_activity_level(activity_level)

    # Menampilkan BMI
    print(f"BMI: {bmi}")

    # Memprediksi kategori obesitas berdasarkan BMI
    predicted_category = predict_obesity_category(bmi, knn_model)

    # Menampilkan hasil prediksi
    print(f"Predicted Obesity Category: {predicted_category}")

    print("\n")

    print("Jumlah Tetangga:", knn_model.n_neighbors)
    print("Kelas Target:", knn_model.classes_)
    print("Metrik Jarak:", knn_model.effective_metric_)
    print("Output 2D:", knn_model.outputs_2d_)

    print("\n")

    # Memprediksi kategori obesitas untuk seluruh data training
    y_pred_train = knn_model.predict(X)

    # Menghitung akurasi model terhadap data training
    accuracy_train = accuracy_score(y, y_pred_train)
    print("Accuracy on Training Data:", accuracy_train)

    # Menampilkan classification report untuk data training
    print("Classification Report on Training Data:")
    print(classification_report(y, y_pred_train))

