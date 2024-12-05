<?php

include "function.php";

$obats = query("SELECT * FROM obat");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />


</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <h1 class="flex items-center justify-center xl:text-5xl font-semibold px-3 text-3xl">Data obat apotek sehat</h1>
    <!-- Modal toggle -->
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Toggle modal
    </button>

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        buat produk baru
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                            <input type="text" name="nama" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">harga obat</label>
                            <input type="number" name="harga" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis obat</label>
                            <select id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="pain killer">pain killer</option>
                                <option value="antibiotik">antibiotik</option>
                                <option value="analgesik">Analgesik</option>
                                <option value="obat herbal">obat herbal</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">informasi obat</label>
                            <textarea id="description" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        tambah produk baru
                    </button>
                </form>
            </div>
        </div>
    </div>


    <?php

    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $harga = htmlspecialchars($_POST['harga']);
        $jenis = htmlspecialchars($_POST['jenis']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $sql = mysqli_query($db, "INSERT INTO `obat`(`nama_obat`, `jenis_obat`, `harga_obat`, `informasi_obat`) VALUES ('$nama','$jenis','$harga','$deskripsi')");

        if (mysqli_affected_rows($db,) > 0) {
            echo "Berhasil";
        }
    }


    ?>



    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Nama obat
                </th>
                <th scope="col" class="px-6 py-3">
                    Informasi obat
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis obat
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga obat
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($obats as $obat) :
            ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $obat['nama_obat'] ?> </th>
                    <td class="px-6 py-4">
                        <?= $obat['informasi_obat'] ?> </td>
                    <td class="px-6 py-4">
                        <?= $obat['jenis_obat'] ?> </td>
                    <td class="px-6 py-4">
                        <?= $obat['harga_obat'] ?> </td>
                    <td>
                        <button data-modal-target="edit-modal-<?= $obat['id'] ?>" data-modal-toggle="edit-modal-<?= $obat['id'] ?>" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Edit Produk
                        </button>

                        <!-- Edit Modal -->
                        <div id="edit-modal-<?= $obat['id'] ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" bis_skin_checked="1">
                            <div class="relative p-4 w-full max-w-md max-h-full" bis_skin_checked="1">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" bis_skin_checked="1">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600" bis_skin_checked="1">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Edit Produk
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-modal-<?= $obat['id'] ?>">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <form method="post" class="p-4 md:p-5">
                                        <input type="hidden" name="id" value="34">
                                        <div class="grid gap-4 mb-4 grid-cols-2" bis_skin_checked="1">
                                            <div class="col-span-2" bis_skin_checked="1">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                                                <input type="text" name="nama" id="name" value="<?= $obat['nama_obat'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1" bis_skin_checked="1">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Obat</label>
                                                <input type="number" name="<?= $obat['harga_obat'] ?>" id="price" value="<?php $obat['harga_obat']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1" bis_skin_checked="1">
                                                <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Obat</label>
                                                <select name="jenis" id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                    <option value="pain killer" <?php if ($obat['jenis_obat'] == 'painkiller') echo 'selected' ?>>Pain Killer</option>
                                                    <option value="antibiotik" <?php if ($obat['jenis_obat'] == 'antibiotik') echo 'selected' ?>>Antibiotik</option>
                                                    <option value="analgesik" <?php if ($obat['jenis_obat'] == 'analgesik') echo 'selected' ?>>Analgesik</option>
                                                    <option value="obat herbal" <?php if ($obat['jenis_obat'] == 'obat herbal') echo 'selected' ?>>Obat Herbal</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2" bis_skin_checked="1">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informasi Obat</label>
                                                <textarea id="description" name="deskripsi" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"><?= $obat['informasi_obat'] ?></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" name="edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                                            Simpan Perubahan
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="function.php?id=<?= $obat['id'] ?>">Hapus </a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>





</body>

</html>

<?php

?>