<h1>Unixtime</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
int Unixtime ( void )
</pre>
Возвращает количество секунд, прошедших с начала Эпохи Unix (The Unix Epoch, 1 января 1970 00:00:00 GMT) до текущего времени.<br />
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Console.WriteLine(Test.Unixtime());
            Console.ReadLine();
        }
    }
}
</pre>
