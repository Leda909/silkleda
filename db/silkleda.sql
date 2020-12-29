CREATE DATABASE IF NOT EXISTS silk_shop;
USE silk_shop;
-- --------------------------------------------------------

-- Table structure for table  product 

CREATE TABLE IF NOT EXISTS  product  (
 product_id  INT(10) NOT NULL AUTO_INCREMENT,
 product_title  VARCHAR(100) NOT NULL,
 product_category VARCHAR(100) NOT NULL,
 product_type VARCHAR(100) NOT NULL,
 product_price  DECIMAL(6,2),
 product_description TEXT,
 product_size VARCHAR(100),
 product_image VARCHAR(50) default 'default_product_image.png',
 disabled  tinyint(4) NOT NULL,
 PRIMARY KEY(product_id)) ;

--
-- Dumping data for table  product 
--

INSERT INTO  product  (product_title , product_category, product_type, product_price, product_description, product_size, product_image, disabled ) VALUES
('Freedom', 'Picture', 'Wall picture', '210', 'A blue colibri spreads out his wings in the middle of sunshine, to take some nectare gives a freedom feeling to the picture. There are two full mandalas (self esteem and feminity) with a one growing one.', '60 x 55', 'bird1.jpg', 0),
('Self love', 'Mandala', 'Window picture', '35', 'The six allocated mandala with the green and pink colours dominancia reflects the simbol of the heart chacra. This chackra means love, affirmation, acceptance. The golden orange adds an extra solemn, cheerful mood to the mandala.', '15 x 15', 'mandala01.jpg', 0),
('Affectionate pain', 'Mandala', 'Window picture', '40', 'It is a six-pionted mandala, with the mixture of smaragd, lihght-purpule and lazac colours. From the centrum, the roundish forms transforms into sharp egges. Those egges simbolizing the pain, and the rest of other are the affirmation.', '30 x 30', 'mandala02.jpg', 0),
('Svadhisthana feeling', 'Mandala', 'Window picture', '30', 'The  indigo, purple and blue reflecting to chacra of third eye , while the form devided into six, like the heart chakra.', '30 x 30', 'mandala04.jpg', 0),
('Happy girl', 'Mandala', 'Sewn silk product', '55', 'The play of the yellow, pink, gold colors and the heart and lots of points patterns give a happy feminim symbolic mood to this six allocated mandala, which reflects the heart chacra with its  love, affirmation and acceptance meaning.', '60 x 70', 'happygirl.jpg', 0),
('Tit and flowers', 'Picture', 'Window picture', '35', 'A tit get off on a flower, while in the background there are flower pattern made with batic technic.', '15 x 15', 'tit01.jpg', 0),
('Soul of garden', 'Picture', 'Wall picture', '375','Four tits and butterflies chille out in the vivid green flowery meadow. The location of flowers give an airy, volant appearance to the picture. On the top there is a Spring mandala, below, a more static feminim Sun mandala.','120 x 90', 'soulofgarden.jpg', 0),
('Self-confidence mandala', 'Mandala', 'Sewn silk product', '60','The six allocated mandala with a smaragd-green dominancy - related to the heart chackra..','55 x 60','pillow02.jpg', 0),
('Skirt with bird', 'Picture', 'Sewn silk product', '', '', '', 'skirt.jpg', 1),
('Peace mandala', 'Mandala', 'Wall picture', '', '', '', 'peace.jpg', 1),
('Tit', 'Picture', 'Window picture','35','A little flying tit above glazed-pink flowers.','15 x 15', 'tit02.jpg', 0),
('Birds in the night', 'Picture', 'Wall picture','', '', '', 'birdatnight.jpg', 1),
('Bird & Butterfly laptop bag', 'Picture', 'Sewn silk product', '', '', '','laptopbag.jpg', 1),
('Sunny mandala', 'Mandala', 'Wall picture', '', '', '', 'mandala07.jpg', 1),
('Svadhisthana feeling', 'Mandala', 'Window picture', '', '', '', 'mandala04.jpg', 1),
('Kolibri', 'Picture', 'Window picture','35','Hummingbird is gnawing nectar in the bright sun.','15 x 15', 'kolibri.jpg', 0),
('Butterflies', 'Picture', 'Wall picture', '', '', '', 'butterfly.jpg', 1),
('Bird in embroidery', 'Picture', 'Sewn silk product','50','The bird who is escaping from the emboroidey surrounded golden cage.','60 x 55', 'embroidery_pillow.jpg', 0),
('Jellyfish in the subconscious', 'Picture', 'Wall picture', '', '', '', 'jellyfish.jpg', 1),
('Pouch with dragonfly', 'Picture', 'Sewn silk product', '10','Dragonfly above in the rainbow. Small bag, that you can close by the pink strip.','10 x 20','dragonfly_bag.jpg', 0),
('Pouch with fox', 'Picture', 'Sewn silk product','10','Fox who is sitting on the cloud. Small bag, that you can close by a strip.','10 x 20', 'fox_bag.jpg', 0),
('Consolation', 'Picture', 'Wall picture','50','The little girl who embraces her happy rainbow teddy in her grief.','20 x 30', 'consolation.jpg', 0),
('Eyes', 'Picture', 'Wall picture','60','Two eyes, the energy of Anger & the energy of Compassion look & come out of the black space.','60 x 60', 'eyes.jpg', 0),
('Pisces', 'Picture', 'Wall picture', '', '', '', 'fish02.jpg', 1),
('Spreading love', 'Mandala', 'Window picture', '', '', '', 'mandala13.jpg', 1),
('Autumn', 'Mandala', 'Window picture','35','Soft autumn leaves burn out around the slowly dormunt sun. It is a eight-pioned mandala, which means stability.','20 x 20', 'mandala12.jpg', 0),
('Spiritual bouquet', 'Mandala', 'Window picture','35','The purpule gives a spiritual mood to the mandala.','20 x 20', 'mandala05.jpg', 0),
('Greedy cat', 'Picture', 'Wall picture', '', '', '', 'greedycat.jpg', 1),
('Balerina', 'Picture', 'Wall picture', '', '', '', 'balerina.jpg', 1),
('Stability', 'Mandala', 'Window picture', '', '', '', 'mandala03.jpg', 1),
('Hippy mandala', 'Mandala', 'Window picture','40','A six-pioned, bum of colours mandala. It made with steaming silk painting technic.','20 x 20', 'mandala06.jpg', 0),
('Chirp chirp mandala', 'Mandala', 'Window picture','35','A twelw-pioned mandala. The turkiz blue is a the colour of vocality.','20 x 20', 'mandala09.jpg', 0),
('Hide and seek', 'Picture', 'Wall picture', '', '', '', 'hideandseek.jpg', 1),
('Stable love', 'Mandala', 'Window picture', '', '', '', 'mandala08.jpg', 1),
('Parrots', 'Picture', 'Wall picture', '', '', '', 'parrot.jpg', 1),
('Owl Light', 'Picture', 'Wall picture', '', '', '', 'owl_lamp.jpg', 1),
('Sea life', 'Picture', 'Wall picture', '', '', '', 'sealife.jpg', 1),
('Turtle & jellyfishes', 'Picture', 'Wall picture', '', '', '', 'turtle_jellyfishes.jpg', 1),
('Flower mandala', 'Mandala', 'Window picture', '', '', '', 'mandala11.jpg', 1),
('Rainbow sea', 'Picture', 'Wall picture', '', '', '', 'rainbowsea.jpg', 1),
('Turtles bag', 'Picture', 'Sewn silk product', '', '', '', 'turtle_bag.jpg', 1),
('Poppy', 'Picture', 'Wall picture', '', '', '', 'poppy.jpg', 1),
('Purple butterfly', 'Picture', 'Wall picture', '', '', '', 'butterfly02.jpg', 1),
('Butterfly and yellow cubes', 'Picture', 'Sewn silk product', '', '', '', 'pillow03.jpg', 1),
('Self-esteem', 'Mandala', 'Window picture', '', '', '', 'mandala10.jpg', 1),
('Dog and cat', 'Picture', 'Wall picture', '', '', '', 'dogcat.jpg', 1),
('Flower', 'Picture', 'Wall picture', '', '', '', 'flower.jpg', 1),
('Sugar flies', 'Picture', 'Wall picture', '', '', '', 'sugarfly.jpg', 1),
('Tree in the sky', 'Picture', 'Wall picture', '', '', '', 'tree01.jpg', 1),
('Chakras', 'Picture', 'Wall picture', '', '', '', 'chakras.jpg', 1),
('Matyik', 'Picture', 'Wall picture', '', '', '', 'matyik.jpg', 1),
('Universal love', 'Picture', 'Wall picture', '', '', '', 'universallove.jpg', 1),
('Heads', 'Picture', 'Wall picture', '', '', '', 'heads.jpg', 1),
('After Mucha', 'Picture', 'Wall picture','25','Copy of Alphonse Mucha: Emerald','15 x 25', 'muha01.jpg', 0),
('Breezy fish', 'Picture', 'Wall picture','35','Fich with with a magic wheel, which is a contradictory as wind is an element of air and not elementof water.','21 x 30', 'fish.jpg', 0),
('Bug', 'Picture', 'Wall picture', '30','Vivid bug among flowers, and with dark blue paper frame','20 x 20', 'bug.jpg', 0);


-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS cart(
    temp_user_id VARCHAR(100) NOT NULL,
    product_id INT(10) NOT NULL,
    quantity INT(10) NOT NULL,
    FOREIGN KEY(product_id) REFERENCES product(product_id)
    );

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS order_line(
    order_id INT(10) NOT NULL AUTO_INCREMENT,
    product_id INT(10) NOT NULL,
    quantity INT(10) NOT NULL,
    PRIMARY KEY(order_id)
    FOREIGN KEY(product_id) REFERENCES product(product_id)
    FOREIGN KEY(quantity) REFERENCES cart(quantity)
    );

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS orders(
    order_id INT(10) NOT NULL,
    user_id INT(10) NOT NULL,
    order_date timestamp() NOT NULL,
    FOREIGN KEY(order_id) REFERENCES order_id(order_id)
    FOREIGN KEY(user_id) REFERENCES users(user_id)
    );

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS payments(
    payment_id INT(11) NOT NULL AUTO_INCREMENT,
    order_id INT(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    card_num BIGINT(20) NOT NULL,
    card_cvc INT(5) NOT NULL,
    card_exp_month VARCHAR(2) NOT NULL,
    card_exp_year VARCHAR(5) NOT NULL,
    total_price float(10,2) NOT NULL,
    total_price_currency VARCHAR(10) NOT NULL,
    paid_amount float(10,2) NOT NULL,
    paid_amount_currency VARCHAR(10) NOT NULL,
    txn_id VARCHAR(100) NOT NULL,
    payment_status VARCHAR(50) NOT NULL,
    created DATETIME NOT NULL,
    modified DATETIME NOT NULL,
    PRIMARY KEY(payment_id)
    FOREIGN KEY(order_id) REFERENCES order_id(order_id)
    );

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS users (
  user_id INT(10) NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(200) NOT NULL,
  PRIMARY KEY (user_id)
)ENGINE=InnoDB DEFAULT CHARSET="utf8" ;


-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS contact(
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    reason VARCHAR(250) NOT NULL,
    message TEXT NOT NULL,
    date_posted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;