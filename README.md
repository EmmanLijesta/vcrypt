# Vcrypt
High performance compression and encryption of data or string using Vernam cipher in PHP.

A 1500-char string will be around 48% compressed and encrypted in less than 0.001ms

# Brief History

Vernam cipher, created by Gilber Sandford Vernam (3 April 1890 – 7 February 1960), is a symmetrical stream cipher in which the plaintext is combined with a random or pseudorandom stream of data (the "keystream") of the same length, to generate the ciphertext, using the XOR function. Though sounds simple, it is the only existing mathematically unbreakable encryption, and thus it provides very long-term message secrecy.

Vernam also patented a "Secret Signaling System" in July 22, 1919. The NSA has called this patent "perhaps one of the most important in the history of cryptography." Also, the US Army 1925 SIGTOT teletype system was based on Vernam's machine encipherment concept.

Vernam cipher is also called an unbreakable cipher, as long as the key is kept secret.

# How to Use Vcrypt

include "vcrypt.php";

$t = "Turning away from the ledge, he started slowly down the mountain, deciding that he would, that very night, satisfy his curiosity about the man-house.";

$k = "f0971dbfe2ca3c75b4dac60f087670f2caa19781057abb432a24daee6c915e93";

Encoding

$res = new Vcrypt($t, $k);

$enc = $res->enc();

echo $enc;

Decoding

$res = new Vcrypt($enc, $k);

$dec = $res->dec();

echo $dec;
