<?php

namespace Tests\Unit;

use Ianriizky\CodingInterview\Palindrome\Palindrome;
use Tests\TestCase;

class PalindromeTest extends TestCase
{
    /**
     * List of palindrome word.
     *
     * @var array
     */
    protected array $palindromeWords = [
        'ada', 'apa', 'ara',
        'asa', 'bab', 'ini',
        'katak', 'kodok', 'makam',
        'malam', 'radar', 'taat', 'tamat'
    ];

    /**
     * List of un-palindrome word.
     *
     * @var array
     */
    protected array $unpalindromeWords = [
        'kata', 'kabar', 'perkataan',
        'sabda', 'pesan', 'janji',
        'istilah', 'masa', 'waktu',
        'kata', 'sebutan', 'hubungan', 'cinta',
    ];

    /**
     * List of palindrome sentence.
     *
     * @var array
     */
    protected array $palindromeSentences = [
        'Aku suka rajawali, bapak. Apabila wajar, aku suka.',
        'Kasur ini rusak.',
        'Kasur Nababan rusak.',
        'Kasur Koh Ahok rusak.',
        'Ibu Ratna antar ubi.',
        'Dia haid.',
        'Ria Irawan nawari air.',
        'Harum semar kayak rames murah.',
        'Tasupi dan Tika sama-sama sakit nadi pusat.',
        'Ira hamil lima hari.',
    ];

    /**
     * List of un-palindrome sentence.
     *
     * @var array
     */
    protected array $unpalindromeSentences = [
        '76 tahun Indonesia merdeka.',
        'Budi membeli ikan.',
        'Tania pergi ke pasar.',
        'Joe Biden terpilih menjadi presiden Amerika Serikat.',
        'Gusti menendang bola.',
        'Ibuku seorang guru.',
        'Riana akan pulang besok pagi.',
        'TNI adalah singkatan dari Tentara Nasional Indonesia.',
        'Siska sedang memasak di dapur.',
        'Ia memuntus pergi dari rumah karena ia tidak kuat lagi melihat kelakuan ayahnya.',
    ];

    /**
     * Assert that method Palindrome::isPalindromeUsingReverse() is run successfully.
     *
     * @return mixed
     */
    public function test_assert_is_palindrome_with_reverse()
    {
        foreach ($this->palindromeWords as $word) {
            $this->assertTrue(
                Palindrome::make($word)->checkUsingReverse(),
                $this->generateErrorMessageForWord($word)
            );
        }

        foreach ($this->unpalindromeWords as $word) {
            $this->assertFalse(
                Palindrome::make($word)->checkUsingReverse(),
                $this->generateErrorMessageForWord($word)
            );
        }

        foreach ($this->palindromeSentences as $sentence) {
            $this->assertTrue(
                Palindrome::make($sentence)->checkUsingReverse(),
                $this->generateErrorMessageForSentence($sentence)
            );
        }

        foreach ($this->unpalindromeSentences as $sentence) {
            $this->assertFalse(
                Palindrome::make($sentence)->checkUsingReverse(),
                $this->generateErrorMessageForSentence($sentence)
            );
        }
    }

    /**
     * Assert that method Palindrome::isPalindromeUsingLoop() is run successfully.
     *
     * @return mixed
     */
    public function test_assert_is_palindrome_with_loop()
    {
        foreach ($this->palindromeWords as $word) {
            $this->assertTrue(
                Palindrome::make($word)->checkUsingLoop(),
                $this->generateErrorMessageForWord($word)
            );
        }

        foreach ($this->unpalindromeWords as $word) {
            $this->assertFalse(
                Palindrome::make($word)->checkUsingLoop(),
                $this->generateErrorMessageForWord($word)
            );
        }

        foreach ($this->palindromeSentences as $sentence) {
            $this->assertTrue(
                Palindrome::make($sentence)->checkUsingLoop(),
                $this->generateErrorMessageForSentence($sentence)
            );
        }

        foreach ($this->unpalindromeSentences as $sentence) {
            $this->assertFalse(
                Palindrome::make($sentence)->checkUsingLoop(),
                $this->generateErrorMessageForSentence($sentence)
            );
        }
    }

    /**
     * Assert that method Palindrome::isPalindromeUsingRecursive() is run successfully.
     *
     * @return mixed
     */
    public function test_assert_is_palindrome_with_recursive()
    {
        foreach ($this->palindromeWords as $word) {
            $this->assertTrue(
                Palindrome::make($word)->checkUsingRecursive(),
                $this->generateErrorMessageForWord($word)
            );
        }

        foreach ($this->unpalindromeWords as $word) {
            $this->assertFalse(
                Palindrome::make($word)->checkUsingRecursive(),
                $this->generateErrorMessageForWord($word)
            );
        }

        foreach ($this->palindromeSentences as $sentence) {
            $this->assertTrue(
                Palindrome::make($sentence)->checkUsingRecursive(),
                $this->generateErrorMessageForSentence($sentence)
            );
        }

        foreach ($this->unpalindromeSentences as $sentence) {
            $this->assertFalse(
                Palindrome::make($sentence)->checkUsingRecursive(),
                $this->generateErrorMessageForSentence($sentence)
            );
        }
    }

    /**
     * Generate an error message for palindrome word.
     *
     * @param  string  $word
     * @return string
     */
    protected function generateErrorMessageForWord(string $word): string
    {
        return sprintf('word: %s', $word);
    }

    /**
     * Generate an error message for palindrome sentence.
     *
     * @param  string  $sentence
     * @return string
     */
    protected function generateErrorMessageForSentence(string $sentence): string
    {
        return sprintf('sentence: %s', $sentence);
    }
}
