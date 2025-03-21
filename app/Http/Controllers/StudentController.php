<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->paginate(10);
        return view('dashboard.students.index', compact('students'));
    }

    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'nis' => 'required|string|unique:users',
            'nisn' => 'nullable|string|unique:users',
            'class' => 'required|string',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:L,P',
            'academic_year' => 'nullable|string',
            'parent_name' => 'nullable|string|max:255',
            'parent_phone' => 'nullable|string|max:15',
            'profile_photo' => 'nullable|image|max:2048',
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'class' => $request->class,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'academic_year' => $request->academic_year,
            'parent_name' => $request->parent_name,
            'parent_phone' => $request->parent_phone,
        ];

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $userData['profile_photo'] = $path;
        }

        User::create($userData);

        return redirect()->route('students.index')
            ->with('success', 'Akun siswa berhasil dibuat.');
    }

    public function edit(User $student)
    {
        return view('dashboard.students.edit', compact('student'));
    }

    public function update(Request $request, User $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$student->id,
            'nis' => 'required|string|unique:users,nis,'.$student->id,
            'nisn' => 'nullable|string|unique:users,nisn,'.$student->id,
            'class' => 'required|string',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:L,P',
            'academic_year' => 'nullable|string',
            'parent_name' => 'nullable|string|max:255',
            'parent_phone' => 'nullable|string|max:15',
            'profile_photo' => 'nullable|image|max:2048',
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'class' => $request->class,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'academic_year' => $request->academic_year,
            'parent_name' => $request->parent_name,
            'parent_phone' => $request->parent_phone,
        ];

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            // Delete old photo if exists
            if ($student->profile_photo) {
                Storage::disk('public')->delete($student->profile_photo);
            }
            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $userData['profile_photo'] = $path;
        }

        $student->update($userData);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            
            $student->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('students.index')
            ->with('success', 'Akun siswa berhasil diperbarui.');
    }

    public function destroy(User $student)
    {
        // Delete profile photo if exists
        if ($student->profile_photo) {
            Storage::disk('public')->delete($student->profile_photo);
        }
        
        $student->delete();
        
        return redirect()->route('students.index')
            ->with('success', 'Akun siswa berhasil dihapus.');
    }
} 