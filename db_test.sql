CREATE TABLE `pegawai` (
    `id_pegawai` VARCHAR(3) PRIMARY KEY NOT NULL,
    `nama` VARCHAR(20) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `no_hp` VARCHAR(11) NOT NULL,
    `alamt` VARCHAR(100),
    `date` DATETIME NOT NULL DEFAULT current_timestamp()
);

